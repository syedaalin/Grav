<?php

declare(strict_types=1);

namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;
use Grav\Common\Config\Config;
use Grav\Theme\NurUlHuda\Payments\JazzCashHandler;
use Grav\Theme\NurUlHuda\Services\MoodleService;
use Grav\Theme\NurUlHuda\Utils\SecurityLogger;
use Grav\Theme\NurUlHuda\Utils\LogoValidator;
use Grav\Theme\NurUlHuda\Utils\ViewHelper;
use Grav\Theme\NurUlHuda\Services\FormPrivacyGuard;

class NurUlHuda extends Theme
{
    protected JazzCashHandler $jazzCash {
        get => $this->jazzCash ??= new JazzCashHandler($this->config());
    }

    protected MoodleService $moodle {
        get => $this->moodle ??= new MoodleService();
    }

    protected ?SecurityLogger $logger = null;

    public static function getSubscribedEvents(): array
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

    public function onThemeInitialized(): void
    {
        // PSR-4 Autoloading via Composer
        require_once __DIR__ . '/vendor/autoload.php';

        $this->logger = new SecurityLogger();

        // Add security headers (only in production mode)
        if ($this->config()['production-mode'] ?? true) {
            $this->addSecurityHeaders();
        }
    }

    /**
     * Add security headers to HTTP response
     */
    protected function addSecurityHeaders(): void
    {
        // Only add headers if not already sent
        if (headers_sent()) {
            return;
        }

        // X-Frame-Options: Prevent clickjacking
        header('X-Frame-Options: SAMEORIGIN');

        // X-Content-Type-Options: Prevent MIME sniffing
        header('X-Content-Type-Options: nosniff');

        // Referrer-Policy: Control referrer information
        header('Referrer-Policy: strict-origin-when-cross-origin');

        // Permissions-Policy: Restrict browser features
        header('Permissions-Policy: geolocation=(self), microphone=(), camera=()');

        // X-XSS-Protection: Enable XSS filter (legacy browsers)
        header('X-XSS-Protection: 1; mode=block');
    }

    public static function validateLogo(mixed $value): bool
    {
        return (bool) LogoValidator::validate($value);
    }

    public function onFormProcessed($event): void
    {
        $form = $event['form'];
        $action = $event['action'];

        $guard = new FormPrivacyGuard();
        $guard->handle($form, $action);
    }

    public function onPageInitialized(): void
    {
        $uri = $this->grav['uri'];

        // Listen for JazzCash Callback
        if ($uri->path() === '/payment/jazzcash/callback') {
            $this->jazzCash->handleCallback();
        }
    }

    /**
     * Get font options for Blueprints dropdown
     * Merges default fonts with user-uploaded custom fonts
     */
    public static function getFontOptions(): array
    {
        $options = [
            "sans-serif" => "System Sans",
            "serif" => "System Serif"
        ];

        // Fetch custom fonts from theme config
        $config = Grav::instance()['config']->get('themes.nur-ul-huda');

        // Grav 'file' field with multiple:true returns an associative array:
        // ['path/to/file.woff2' => ['name' => 'file.woff2', 'path' => '...'], ...]
        if (isset($config['custom_fonts']) && is_array($config['custom_fonts'])) {
            foreach ($config['custom_fonts'] as $fileObject) {
                if (isset($fileObject['name'])) {
                    // Extract name from filename (remove extension)
                    // e.g. "MyFont.woff2" -> "MyFont"
                    $fileName = $fileObject['name'];
                    $name = pathinfo($fileName, PATHINFO_FILENAME);

                    // Sanitize Name for CSS
                    // Ensure quotes if they aren't there
                    if (strpos($name, "'") === false) {
                        $safeKey = "'{$name}', sans-serif";
                    } else {
                        $safeKey = "{$name}, sans-serif";
                    }

                    $options[$safeKey] = "$name (Custom)";
                }
            }
        }

        return $options;
    }

    public function onTwigSiteVariables(): void
    {
        // Check if we are in Admin
        if ($this->isAdmin()) {
            $this->grav['assets']->addJs('theme://js/admin.js', ['group' => 'bottom', 'loading' => 'defer']);
            $this->grav['assets']->addCss('theme://admin/custom-admin.css');
            return;
        }

        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig'];
        $config = $this->config();

        // Moodle API Fetcher
        if (!empty($config['moodle_url']) && !empty($config['moodle_token'])) {
            $courses = $this->moodle->fetchCourses((string)$config['moodle_url'], (string)$config['moodle_token']);
            $twig->twig_vars['moodle_courses'] = $courses;
        }

        // Prepare JS Config
        $adhanMediaUrl = ViewHelper::getAdhanUrl($this->grav, $config);

        // Font Logic
        $headingFont = $config['font_heading'] ?? "'Outfit', sans-serif";
        $bodyFont = $config['font_body'] ?? "'Inter', sans-serif";
        $customFontCss = '';

        // Generate @font-face for ALL custom fonts in the library
        if (!empty($config['custom_fonts']) && is_array($config['custom_fonts'])) {
            foreach ($config['custom_fonts'] as $fileObject) {
                if (isset($fileObject['path']) && isset($fileObject['name'])) {
                    $fontPath = $this->grav['base_url'] . '/' . $fileObject['path'];

                    // Use filename as font-family
                    $fileName = $fileObject['name'];
                    $fontFamily = pathinfo($fileName, PATHINFO_FILENAME);

                    $customFontCss .= "
                    @font-face {
                        font-family: '{$fontFamily}';
                        src: url('{$fontPath}') format('woff2');
                        font-weight: 100 900;
                        font-style: auto;
                        font-display: swap;
                    } ";
                }
            }
        }

        $extraConfig = [
            'language' => $this->grav['language']->getActive() ?: 'en',
            'adhanMedia' => $adhanMediaUrl,
            'fonts' => [
                'heading' => $headingFont,
                'body' => $bodyFont,
                'custom_css' => $customFontCss
            ]
        ];

        $jsConfig = ViewHelper::getThemeConfig($config, $extraConfig);
        $twig->twig_vars['theme_js_config'] = $jsConfig;

        // Pass font config directly to Twig for CSS injection
        $twig->twig_vars['theme_fonts'] = $extraConfig['fonts'];

        // Dynamic CSS Styles
        $styles = ViewHelper::getDynamicStyles($config);
        $twig->twig_vars['dynamic_styles'] = implode('; ', $styles);

        // Schema Data Preparation
        $siteName = $this->grav['config']->get('site.title');
        // If theme has separate site name override
        if (!empty($config['site_name'])) {
            $siteName = $config['site_name'];
        }

        $twig->twig_vars['schema_data'] = ViewHelper::getSchemaUtils($config, ['site_name' => $siteName]);
    }

    // Add images to twig template paths to allow inclusion of SVG files
    public function onTwigLoader(): void
    {
        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig'];
        $theme_paths = Grav::instance()['locator']->findResources('theme://images');
        /** @var string $images_path */
        foreach ($theme_paths as $images_path) {
            $twig->addPath($images_path, 'images');
        }
    }

    public function onTwigInitialized(): void
    {
        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig'];

        $twig->twig_vars = array_merge($twig->twig_vars, ViewHelper::getFormClasses());
    }
}
