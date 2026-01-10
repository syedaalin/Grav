<?php

namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;

class NurUlHuda extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'    => ['onThemeInitialized', 0],
            'onTwigLoader'          => ['onTwigLoader', 0],
            'onTwigInitialized'     => ['onTwigInitialized', 0],
            'onTwigSiteVariables'   => ['onTwigSiteVariables', 0],
            'onPageInitialized'     => ['onPageInitialized', 0],
            'onFormProcessed'       => ['onFormProcessed', 0],
        ];
    }

    public static function validateLogo($value)
    {
        // If no logo is set, we don't validate (it's optional or handled elsewhere)
        if (empty($value)) {
            return true;
        }

        foreach ($value as $filename => $data) {
            // Find absolute path to the uploaded file
            $path = Grav::instance()['locator']->findResource("theme://images/logo/$filename");

            // If the file exists, check dimensions
            if ($path && file_exists($path)) {
                list($width, $height) = getimagesize($path);
                if ($width !== $height) {
                    throw new \RuntimeException(sprintf('Logo "%s" is %dx%dpx. It MUST be 1:1 aspect ratio (Square). Please upload a square image (e.g. 512x512).', $filename, $width, $height));
                }
            }
        }
        return true;
    }

    public function onFormProcessed($event)
    {
        $form = $event['form'];
        $action = $event['action'];

        if ($action === 'save' || $action === 'email') {
            $data = $form->value()->toArray();

            // Privacy Guard: Scrub data if anonymous is toggled
            if (isset($data['anonymous']) && $data['anonymous'] == 1) {
                // Remove personal identifiers
                $form->setFields(['name' => null]);

                // Note: Grav's save action usually includes IP. 
                // We'd need to ensure the form plugin itself is configured 
                // or scrubbed here if the specific plugin version allows.
            }
        }
    }

    public function onPageInitialized()
    {
        $uri = $this->grav['uri'];

        // Listen for JazzCash Callback
        if ($uri->path() === '/payment/jazzcash/callback') {
            $this->handleJazzCashCallback();
        }
    }

    protected function handleJazzCashCallback()
    {
        $post = $_POST;
        $config = $this->config();
        $salt = $config['jazzcash_salt'] ?? '';

        if (empty($post) || empty($salt)) {
            $this->grav['log']->error('JazzCash callback failed: Missing POST data or salt');
            return;
        }

        // Verify Hash
        if (!$this->verifyJazzCashHash($post, $salt)) {
            $this->grav['log']->error('JazzCash callback failed: Invalid hash signature');
            header('Location: ' . $this->grav['base_url'] . '/checkout/error');
            exit;
        }

        if ($post['pp_ResponseCode'] === '000') {
            // Payment successful
            $this->grav['log']->info('JazzCash payment successful: ' . $post['pp_BillReference']);
            $this->updateSnipcartOrderStatus($post['pp_BillReference'], 'Processed');
            header('Location: ' . $this->grav['base_url'] . '/checkout/confirmation');
        } else {
            // Payment failed
            $this->grav['log']->warning('JazzCash payment failed: Code ' . $post['pp_ResponseCode']);
            header('Location: ' . $this->grav['base_url'] . '/checkout/error');
        }
        exit;
    }


    /**
     * Verify JazzCash payment hash for security
     */
    protected function verifyJazzCashHash($post, $salt)
    {
        if (!isset($post['pp_SecureHash'])) {
            return false;
        }

        $response_hash = $post['pp_SecureHash'];
        unset($post['pp_SecureHash']);
        ksort($post);

        $hash_string = $salt;
        foreach ($post as $key => $value) {
            if ($value != '') {
                $hash_string .= '&' . $value;
            }
        }

        $expected_hash = strtoupper(hash_hmac('sha256', $hash_string, $salt));
        return hash_equals($expected_hash, $response_hash);
    }

    /**
     * Update Snipcart order status via API
     */
    protected function updateSnipcartOrderStatus($order_token, $status)
    {
        $config = $this->config();
        $api_key = $config['snipcart_key'] ?? '';

        if (!$api_key) {
            $this->grav['log']->warning('Snipcart API key not configured');
            return;
        }

        // Note: This requires the SECRET API key, not the public key
        // The public key in config should be replaced with secret key for this operation
        // For security, the secret key should be stored separately

        try {
            $api_url = "https://app.snipcart.com/api/orders/{$order_token}";

            $ch = curl_init($api_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept: application/json',
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode($api_key . ':')
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
                'status' => $status,
                'paymentStatus' => 'Paid'
            ]));

            $response = curl_exec($ch);
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($http_code === 200) {
                $this->grav['log']->info("Snipcart order {$order_token} updated to {$status}");
            } else {
                $this->grav['log']->error("Failed to update Snipcart order: HTTP {$http_code}");
            }
        } catch (\Exception $e) {
            $this->grav['log']->error('Snipcart API error: ' . $e->getMessage());
        }
    }

    public function onTwigSiteVariables()
    {
        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig'];
        $config = $this->config();

        // Moodle API Fetcher
        if (!empty($config['moodle_url']) && !empty($config['moodle_token'])) {
            $courses = $this->fetchMoodleCourses($config['moodle_url'], $config['moodle_token']);
            $twig->twig_vars['moodle_courses'] = $courses;
        }

        // Location fallback for religious utilities
        $twig->twig_vars['default_location'] = $config['default_location'] ?? 'Karachi';
    }

    protected function fetchMoodleCourses($url, $token)
    {
        /** @var \Grav\Common\Cache $cache */
        $cache = $this->grav['cache'];
        $cache_id = 'moodle_courses_featured';

        return $cache->fetch($cache_id) ?: $cache->save($cache_id, function () use ($url, $token) {
            try {
                $api_url = rtrim($url, '/') . '/webservice/rest/server.php';
                $params = [
                    'wstoken' => $token,
                    'wsfunction' => 'core_course_get_courses',
                    'moodlewsrestformat' => 'json'
                ];

                $response = @file_get_contents($api_url . '?' . http_build_query($params));
                $data = json_decode($response, true);

                return is_array($data) ? array_slice($data, 1, 4) : []; // Skip site course, take 4
            } catch (\Exception $e) {
                return [];
            }
        }, 3600); // Cache for 1 hour
    }

    public function onThemeInitialized() {}

    // Add images to twig template paths to allow inclusion of SVG files
    public function onTwigLoader()
    {
        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig'];
        $theme_paths = Grav::instance()['locator']->findResources('theme://images');
        foreach ($theme_paths as $images_path) {
            $twig->addPath($images_path, 'images');
        }
    }

    public function onTwigInitialized()
    {
        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig'];

        $form_class_variables = [
            //            'form_outer_classes' => 'form-horizontal',
            'form_button_outer_classes' => 'button-wrapper',
            'form_button_classes' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500',
            'form_errors_classes' => 'text-red-600',
            'form_field_outer_classes' => 'mb-4',
            'form_field_outer_label_classes' => 'block text-sm font-medium text-gray-700 mb-1',
            'form_field_label_classes' => 'form-label',
            //            'form_field_outer_data_classes' => 'col-9',
            'form_field_input_classes' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm',
            'form_field_textarea_classes' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm',
            'form_field_select_classes' => 'mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md',
            'form_field_radio_classes' => 'focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300',
            'form_field_checkbox_classes' => 'focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded',
        ];

        $twig->twig_vars = array_merge($twig->twig_vars, $form_class_variables);
    }
}
