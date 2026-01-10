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
    protected ?JazzCashHandler $jazzCash = null;
    protected ?MoodleService $moodle = null;
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
    }

    public static function validateLogo(mixed $value): bool
    {
        if (!class_exists('Grav\Theme\NurUlHuda\Utils\LogoValidator')) {
            // Autoloading should handle this
        }
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
            $this->getJazzCashHandler()->handleCallback();
        }
    }

    protected function getJazzCashHandler(): JazzCashHandler
    {
        if (!$this->jazzCash) {
            $this->jazzCash = new JazzCashHandler($this->config());
        }
        return $this->jazzCash;
    }

    protected function getMoodleService(): MoodleService
    {
        if (!$this->moodle) {
            $this->moodle = new MoodleService();
        }
        return $this->moodle;
    }

    public function onTwigSiteVariables(): void
    {
        // Check if we are in Admin
        if ($this->isAdmin()) {
            $this->grav['assets']->addJs('theme://js/admin.js', ['group' => 'bottom', 'loading' => 'defer']);
            return;
        }

        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig'];
        $config = $this->config();

        // Moodle API Fetcher
        if (!empty($config['moodle_url']) && !empty($config['moodle_token'])) {
            $courses = $this->getMoodleService()->fetchCourses((string)$config['moodle_url'], (string)$config['moodle_token']);
            $twig->twig_vars['moodle_courses'] = $courses;
        }

        // Prepare JS Config
        $adhanMediaUrl = ViewHelper::getAdhanUrl($this->grav, $config);

        $extraConfig = [
            'language' => $this->grav['language']->getActive() ?: 'en',
            'adhanMedia' => $adhanMediaUrl
        ];

        $jsConfig = ViewHelper::getThemeConfig($config, $extraConfig);
        $twig->twig_vars['theme_js_config'] = $jsConfig;

        // Dynamic CSS Styles
        $twig->twig_vars['dynamic_styles'] = ViewHelper::getDynamicStyles($config);

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
