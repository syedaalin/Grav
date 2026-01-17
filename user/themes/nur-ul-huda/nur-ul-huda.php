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
use Grav\Theme\NurUlHuda\Services\FormPrivacyGuard;

// SRP Refactored Helpers
use Grav\Theme\NurUlHuda\Utils\ThemeHelper;
use Grav\Theme\NurUlHuda\Utils\StyleHelper;
use Grav\Theme\NurUlHuda\Utils\FontHelper;
use Grav\Theme\NurUlHuda\Utils\TopBannerHelper;
use Grav\Theme\NurUlHuda\Utils\BottomBannerHelper;
use Grav\Theme\NurUlHuda\Utils\SocialHelper;
use Grav\Theme\NurUlHuda\Utils\MediaHelper;
use Grav\Theme\NurUlHuda\Utils\LayoutHelper;
use Grav\Theme\NurUlHuda\Utils\FormHelper;
use Grav\Theme\NurUlHuda\Utils\SecurityHelper;
use Grav\Theme\NurUlHuda\Utils\SchemaHelper;
use Grav\Theme\NurUlHuda\Utils\ViewHelper;

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

        // Apply Security Headers (SRP: Logic in SecurityHelper)
        SecurityHelper::applyHeaders($this->config());
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

        // Listen for Payment Signing Request (Ajax)
        if ($uri->path() === '/payment/sign-request') {
            $this->jazzCash->handleSignRequest();
        }
    }

    /**
     * Get font options for Blueprints dropdown
     * Merges default fonts with user-uploaded custom fonts
     */
    public static function getFontOptions(): array
    {
        return FontHelper::getFontOptions();
    }

    public function onTwigSiteVariables(): void
    {
        // Check if we are in Admin
        if ($this->isAdmin()) {
            $this->grav['assets']->addJs('theme://js/admin.js', ['group' => 'bottom', 'loading' => 'defer', 'type' => 'module']);
            $this->grav['assets']->addCss('theme://admin/custom-admin.css');
            return;
        }

        // Delegate Twig variable preparation to ViewHelper (SRP)
        ViewHelper::prepareTwigVariables($this->grav, $this);
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

        $twig->twig_vars = array_merge($twig->twig_vars, FormHelper::getFormClasses());
    }
}
