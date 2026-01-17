<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;
use Grav\Common\Theme;
use Grav\Theme\NurUlHuda;

/**
 * SRP: Responsibility for preparing and injecting variables into the Twig environment.
 * Acts as a bridge between the Theme class and the template layer.
 */
readonly final class ViewHelper
{
    /**
     * Prepare and inject all Twig template variables.
     *
     * Acts as the central orchestrator for preparing all data needed by Twig templates.
     * Delegates to specialized helpers following SRP, aggregating:
     * - Service data (Moodle LMS courses)
     * - JavaScript/theme configuration
     * - Dynamic CSS variables
     * - Component data (banners, social, sidebar, logo)
     * - Page-specific data (hero sections)
     *
     * This method is called once per page render from NurUlHuda::onTwigSiteVariables().
     *
     * @param Grav $grav The Grav instance providing access to core services
     * @param NurUlHuda $theme The theme instance for accessing property hooks and config
     * @return void All data is injected into $twig->twig_vars by reference
     */
    public static function prepareTwigVariables(Grav $grav, NurUlHuda $theme): void
    {
        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $grav['twig'];
        $config = $theme->config();

        // 1. Service Data (Moodle)
        if (!empty($config['moodle_url']) && !empty($config['moodle_token'])) {
            $courses = $theme->moodle->fetchCourses((string)$config['moodle_url'], (string)$config['moodle_token']);
            $twig->twig_vars['moodle_courses'] = $courses;
        }

        // 2. Global JS/Theme Config
        $extraConfig = [
            'language' => $grav['language']->getActive() ?: 'en',
            'adhanMedia' => ThemeHelper::getAdhanUrl($grav, $config),
            'fonts' => [
                'heading' => $config['font_heading'] ?? "'Outfit', sans-serif",
                'body' => $config['font_body'] ?? "'Inter', sans-serif",
                'custom_css' => FontHelper::getCustomFontsCss($config)
            ]
        ];

        $twig->twig_vars['theme_js_config'] = ThemeHelper::getThemeConfig($config, $extraConfig);
        $twig->twig_vars['theme_fonts'] = $extraConfig['fonts'];

        // 3. Dynamic CSS Styles
        $twig->twig_vars['dynamic_styles'] = implode('; ', StyleHelper::getDynamicStyles($config));

        // 4. Component & Layout Data
        $siteName = $grav['config']->get('site.title');
        if (!empty($config['site_name'])) {
            $siteName = $config['site_name'];
        }

        $twig->twig_vars['schema_data'] = SchemaHelper::getSchemaData($config, ['site_name' => $siteName]);
        $twig->twig_vars['top_banner'] = TopBannerHelper::getData($config);
        $twig->twig_vars['bottom_banner'] = BottomBannerHelper::getData($config);
        $twig->twig_vars['social_icons'] = SocialHelper::getSocialData($config);
        $twig->twig_vars['sidebar'] = LayoutHelper::getSidebarData($config);
        $twig->twig_vars['logo'] = MediaHelper::getLogoData($config, $grav['pages']->dispatch('/')->media());

        // 5. Page-Specific Data (Hero)
        $page = $grav['page'];
        if ($page && (isset($page->header()->hero_image) || isset($page->header()->hero_video))) {
            $twig->twig_vars['hero'] = MediaHelper::getHeroData((array)$page->header(), $page->media());
        }
    }
}
