<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;
use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for core theme configuration and global helpers.
 * Delegates style and font concerns to specialized helpers.
 */
readonly final class ThemeHelper
{
    /**
     * Get core theme configuration for JavaScript/Twig consumption.
     *
     * Aggregates essential theme settings into a single configuration object
     * that can be serialized to JSON for frontend JavaScript or used in Twig
     * templates. Handles number formatting (western/Arabic/Persian numerals),
     * calendar systems (Gregorian/Hijri), text direction, prayer time methods,
     * and integration keys (Snipcart, Moodle). Follows SRP by focusing solely
     * on configuration aggregation, delegating style/font concerns to helpers.
     *
     * @param Config|array $gravConfig Theme configuration from Grav
     * @param array $extra Additional runtime configuration to merge (e.g., language, adhanMedia)
     * @return array Theme configuration object with all essential settings
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
            // SRP Security: Salt is server-side only
            'moodleUrl' => $header['moodle_url'] ?? '',
            'location' => $header['default_location'] ?? 'Karachi',
        ], $extra);
    }

    /**
     * Get Adhan (call to prayer) audio file URL.
     *
     * Extracts Adhan media file from theme config and generates proper URL
     * using Twig's URL processing to handle base_url and rewrite rules correctly.
     * Returns empty string if no Adhan media is configured, allowing graceful
     * degradation when audio playback is not desired.
     *
     * @param Grav $grav The Grav instance for accessing Twig
     * @param mixed $config Theme configuration containing 'adhan_media' array
     * @return string Full URL to Adhan audio file, or empty string if not configured
     */
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
