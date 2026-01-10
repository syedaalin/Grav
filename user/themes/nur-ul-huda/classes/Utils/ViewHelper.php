<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;
use Grav\Common\Config\Config;

class ViewHelper
{
    /**
     * @return array<string, string>
     */
    public static function getFormClasses(): array
    {
        return [
            'form_button_outer_classes' => 'mt-6 flex justify-end',
            'form_button_classes' => 'inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-xl shadow-lg text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]',
            'form_errors_classes' => 'text-red-500 text-sm font-medium mt-1 animate-fade-in',
            'form_field_outer_classes' => 'mb-5 @container',
            'form_field_outer_label_classes' => 'block text-sm font-bold text-gray-700 mb-2 @lg:text-base',
            'form_field_label_classes' => 'form-label',
            'form_field_input_classes' => 'mt-1 block w-full rounded-xl border-gray-200 bg-gray-50/50 shadow-sm focus:border-primary focus:ring-primary @sm:text-sm transition-all focus:bg-white',
            'form_field_textarea_classes' => 'mt-1 block w-full rounded-xl border-gray-200 bg-gray-50/50 shadow-sm focus:border-primary focus:ring-primary @sm:text-sm transition-all focus:bg-white min-h-[120px]',
            'form_field_select_classes' => 'mt-1 block w-full pl-3 pr-10 py-3 text-base border-gray-200 bg-gray-50/50 focus:outline-none focus:ring-primary focus:border-primary @sm:text-sm rounded-xl transition-all',
            'form_field_radio_classes' => 'focus:ring-primary h-4 w-4 text-primary border-gray-200 bg-gray-50',
            'form_field_checkbox_classes' => 'focus:ring-primary h-4 w-4 text-primary border-gray-200 rounded-lg bg-gray-50',
        ];
    }


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
            'language' => 'en', // Should be passed from PHP if dynamic
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

    /**
     * @param array|Config $config
     * @return array<string>
     */
    public static function getDynamicStyles(mixed $config): array
    {
        $primary = $config['primary_spirit_color'] ?? '#2ecc71';
        $accent = $config['accent_color'] ?? '#f1c40f';
        $blur = ($config['blur_strength'] ?? 12) . 'px';

        return [
            "--color-primary: {$primary}",
            "--color-accent: {$accent}",
            "--blur-strength: {$blur}"
        ];
    }

    /**
     * @param array|Config $config
     * @param array $staticData
     * @return array
     */
    public static function getSchemaUtils(mixed $config, array $staticData): array
    {
        $socials = [];
        foreach (['facebook', 'twitter', 'instagram', 'youtube', 'telegram', 'whatsapp'] as $platform) {
            if (!empty($config["social_{$platform}"])) {
                $socials[] = $config["social_{$platform}"];
            }
        }

        return [
            'orgName' => $staticData['site_name'],
            'phone' => $config['contact_phone'] ?? null,
            'email' => $config['social_email'] ?? null,
            'address' => isset($config['contact_address']) ? \str_replace("\n", ", ", (string)$config['contact_address']) : null,
            'socials' => $socials
        ];
    }
}
