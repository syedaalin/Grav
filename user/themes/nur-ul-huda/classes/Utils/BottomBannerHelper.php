<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;
use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for bottom banner/footer logic.
 */
readonly class BottomBannerHelper
{
    /**
     * @param array|Config $config
     * @return array
     */
    public static function getData(mixed $config): array
    {
        $widgets = $config['bottom_banner_widgets_order'] ?? ['brand', 'social', 'nav', 'newsletter', 'copyright'];
        if (is_string($widgets)) {
            $widgets = array_map('trim', explode(',', $widgets));
        }

        $bgColor = $config['bottom_banner_bg_color'] ?? 'var(--color-bottom-banner-bg)';
        // Simple regex check to match Twig's color logic
        $bgStyle = (preg_match('/^var\(|^oklch/i', $bgColor)) ? $bgColor : "oklch(from {$bgColor} L C H)";

        $textColor = $config['bottom_banner_text_color'] ?? 'var(--color-bottom-banner-text)';

        // Fetch global values for component use
        $siteName = $config['site_name'] ?? Grav::instance()['config']->get('site.title');
        $siteTagline = $config['site_tagline'] ?? null;
        $logo = $config['custom_logo'] ?? null;
        if (is_array($logo)) {
            $logo = \reset($logo);
            $logo = $logo['path'] ?? null;
        }

        return [
            'widgets' => $widgets,
            'bg_style' => $bgStyle,
            'text_color' => $textColor,
            'site_name' => $siteName,
            'site_tagline' => $siteTagline,
            'logo' => $logo,
            'direction' => $config['direction'] ?? 'ltr',
            'columns' => $config['bottom_banner_columns'] ?? [],
            'copyright' => $config['bottom_banner_copyright'] ?? null,
            'show_logo' => $config['bottom_banner_show_logo'] ?? true,
            'show_site_name' => $config['bottom_banner_show_site_name'] ?? true,
            'show_tagline' => $config['bottom_banner_show_tagline'] ?? true,
            'newsletter_enabled' => $config['newsletter_enabled'] ?? $config['bottom_banner_newsletter_enabled'] ?? true,
            'newsletter_title' => $config['newsletter_title'] ?? $config['bottom_banner_newsletter_title'] ?? 'Stay Connected',
            'newsletter_text' => $config['newsletter_text'] ?? $config['bottom_banner_newsletter_text'] ?? 'Join our spiritual journey for weekly insights.'
        ];
    }
}
