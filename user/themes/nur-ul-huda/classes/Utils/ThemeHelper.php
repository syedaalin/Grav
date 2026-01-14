<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;
use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for core theme configuration and global helpers.
 * Delegates style and font concerns to specialized helpers.
 */
readonly class ThemeHelper
{
    /**
     * @param Config|array $gravConfig
     * @param array $extra
     * @return array
     */
    public static function getThemeConfig(mixed $gravConfig, array $extra = []): array
    {
        $header = $gravConfig ?: [];

        return array_merge([
            'numberFormat' => $header['number_format'] ?? 'western',
            'dateCalendar' => $header['date_calendar'] ?? 'gregorian',
            'direction' => $header['direction'] ?? 'ltr',
            'language' => 'en',
            'prayerMethod' => $header['prayer_method'] ?? 'tehran',
            'hijriOffset' => $header['hijri_offset'] ?? 0,
            'snipcartKey' => $header['snipcart_key'] ?? '',
            'moodleUrl' => $header['moodle_url'] ?? '',
            'location' => $header['default_location'] ?? 'Karachi',
        ], $extra);
    }

    public static function getAdhanUrl(Grav $grav, mixed $config): string
    {
        if (empty($config['adhan_media'])) {
            return '';
        }

        $media = \reset($config['adhan_media']); // Get first media item
        if (!$media) {
            return '';
        }

        // Use Twig to generate the URL reliably as it handles base_url and rewrite logic best
        /** @var \Grav\Common\Twig\Twig $twig */
        $twig = $grav['twig'];
        return (string) $twig->processString("{{ url('theme://media/" . $media->name . "') }}");
    }

    /* 
     * LEGACY DELEGATION WRAPPERS 
     * For backward compatibility while refactoring elsewhere.
     */

    public static function getDynamicStyles(mixed $config): array
    {
        return StyleHelper::getDynamicStyles($config);
    }

    public static function getCustomFontsCss(mixed $config): string
    {
        return FontHelper::getCustomFontsCss($config);
    }

    public static function getFontOptions(): array
    {
        return FontHelper::getFontOptions();
    }
}
