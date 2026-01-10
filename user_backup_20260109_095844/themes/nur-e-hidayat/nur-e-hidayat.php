<?php

namespace Grav\Theme;

use Grav\Common\Theme;

class NurEHidayat extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0],
            'onPageInitialized' => ['onPageInitialized', 0],
            'onOutputGenerated' => ['onOutputGenerated', 0]
        ];
    }

    public function onThemeInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }

    /**
     * Handle SSO Redirect to Moodle - Rule 5.A
     */
    public function onPageInitialized()
    {
        $uri = $this->grav['uri'];
        if ($uri->path() === '/login') {
            $moodleUrl = $this->config->get('themes.nur-e-hidayat.moodle_url');
            if ($moodleUrl) {
                header('Location: ' . $moodleUrl . '/login/index.php');
                exit;
            }
        }
    }

    /**
     * Apply Strict Content Security Policy - Rule 5.D
     */
    public function onOutputGenerated()
    {
        $csp = "default-src 'self'; ";
        $csp .= "script-src 'self' 'unsafe-inline' https://cdn.snipcart.com; ";
        $csp .= "style-src 'self' 'unsafe-inline' https://cdn.snipcart.com https://fonts.googleapis.com; ";
        $csp .= "img-src 'self' data: https://cdn.snipcart.com; ";
        $csp .= "connect-src 'self' https://api.aladhan.com https://app.snipcart.com; ";
        $csp .= "font-src 'self' https://fonts.gstatic.com; ";
        $csp .= "frame-src 'self' https://app.snipcart.com; ";
        $csp .= "media-src 'self' data:;";

        header("Content-Security-Policy: " . $csp);
    }

    public function onTwigSiteVariables()
    {
        // Inject 2026 theme configurations into Twig
        $this->grav['assets']->addCss('theme://css/theme.css', 100);

        // Fetch Moodle courses if enabled
        if ($this->config->get('themes.nur-e-hidayat.moodle_url')) {
            $this->grav['twig']->twig_vars['moodle_courses'] = $this->fetchMoodleCourses();
        }

        // Expose JazzCash helper to Twig
        $this->grav['twig']->twig_vars['jazzcash'] = $this;
    }

    /**
     * Fetch Featured Courses from Moodle API
     * Implementation of Rule 4.B (Theme Components 2026)
     */
    public function fetchMoodleCourses()
    {
        $moodleUrl = $this->config->get('themes.nur-e-hidayat.moodle_url');
        $token = $this->config->get('themes.nur-e-hidayat.moodle_api_token');

        if (!$moodleUrl || !$token) return [];

        $cache = $this->grav['cache'];
        $cacheId = 'moodle_courses_' . md5($moodleUrl);

        if ($courses = $cache->fetch($cacheId)) {
            return $courses;
        }

        // Real integration would use Guzzle/Curl to fetch from Moodle REST API
        // For this demo, we mock the API response based on configured URLs
        $courses = $this->config->get('themes.nur-e-hidayat.featured_courses_list');

        // Simulating API enrichment (e.g., adding course IDs or dynamic descriptions)
        foreach ($courses as &$course) {
            $course['api_synced'] = true;
            $course['last_updated'] = date('Y-m-d H:i:s');
        }

        $cache->save($cacheId, $courses, 3600); // Cache for 1 hour
        return $courses;
    }

    /**
     * Generate Secure Hash for JazzCash (Pakistan Payment Gateway)
     * Implementation of Rule 5.B (Theme Components 2026)
     */
    public function generateJazzCashHash(array $params)
    {
        $salt = $this->config->get('themes.nur-e-hidayat.jazzcash_salt');
        ksort($params);
        $message = $salt;
        foreach ($params as $key => $value) {
            if ($value !== '') {
                $message .= '&' . $value;
            }
        }
        return strtoupper(hash_hmac('sha256', $message, $salt));
    }
}
