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
        $csrfTokenName = '';
        $csrfTokenValue = '';

        // Only generate CSRF token if Grav is initialized and session is available
        try {
            $grav = Grav::instance();
            if ($grav && isset($grav['session']) && $grav['session']->isStarted()) {
                $csrf = new \Grav\Theme\NurUlHuda\Utils\CsrfTokenManager();
                $tokenData = $csrf->getTokenData();
                $csrfTokenName = $tokenData['name'];
                $csrfTokenValue = $tokenData['value'];
            }
        } catch (\Exception $e) {
            // Silently fail if CSRF token generation fails
        }

        return [
            'form_button_outer_classes' => 'form-actions',
            'form_button_classes' => 'btn-primary',
            'form_errors_classes' => 'form-error',
            'form_field_outer_classes' => 'form-field-outer',
            'form_field_outer_label_classes' => 'form-label',
            'form_field_label_classes' => 'form-label-inner',
            'form_field_input_classes' => 'form-input',
            'form_field_textarea_classes' => 'form-textarea',
            'form_field_select_classes' => 'form-select',
            'form_field_radio_classes' => 'form-radio',
            'form_field_checkbox_classes' => 'form-checkbox',
            'csrf_token_name' => $csrfTokenName,
            'csrf_token_value' => $csrfTokenValue
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

    /**
     * @param array|Config $config
     * @return array<string>
     */
    public static function getDynamicStyles(mixed $config): array
    {
        $styles = [];

        // If these variables are not set in the admin, we allow the CSS @theme defaults to take over
        // However, if they ARE set, we inject them into the style tag overrides.
        if (!empty($config['primary_spirit_color'])) {
            $styles[] = "--color-primary: {$config['primary_spirit_color']}";
        }

        if (!empty($config['accent_color'])) {
            $styles[] = "--color-accent: {$config['accent_color']}";
        }

        // Blur is an exception where we likely always want a value, defaulting to 12 if missing
        $blurValue = $config['blur_strength'] ?? 12;
        $styles[] = "--blur-strength: {$blurValue}px";

        // Glassmorphism (2026 Dynamic Configuration)
        $glassBg = $config['glass_bg_color'] ?? '#ffffff';

        // Opacity (0-100 -> 0.0-1.0)
        $rawOp = $config['glass_opacity'] ?? 65;
        $glassOpacity = ($rawOp <= 1) ? $rawOp : $rawOp / 100;

        // Blur (px)
        $rawBlur = $config['glass_blur'] ?? '16px';
        $glassBlur = is_numeric($rawBlur) ? "{$rawBlur}px" : $rawBlur;

        // Border Opacity
        $rawBorderOp = $config['glass_border_opacity'] ?? 15;
        $glassBorderOp = ($rawBorderOp <= 1) ? $rawBorderOp : $rawBorderOp / 100;

        // Highlight Opacity
        $rawHighlight = $config['glass_highlight'] ?? 40;
        $glassHighlightOp = ($rawHighlight <= 1) ? $rawHighlight : $rawHighlight / 100;

        // Noise Texture
        $enableNoise = $config['glass_noise'] ?? true;
        // SVG Data URI for Noise
        $noiseUrl = 'url("data:image/svg+xml,%3Csvg viewBox=\'0 0 200 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noiseFilter\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.65\' numOctaves=\'3\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noiseFilter)\' opacity=\'0.05\'/%3E%3C/svg%3E")';

        $glassNoise = $enableNoise ? $noiseUrl : 'none';

        $styles[] = "--glass-bg: {$glassBg}";
        $styles[] = "--glass-opacity: {$glassOpacity}"; // Updated variable name to match token
        $styles[] = "--glass-blur: {$glassBlur}";
        $styles[] = "--glass-border: 1px solid oklch(1 0 0 / {$glassBorderOp})";
        $styles[] = "--glass-highlight: oklch(1 0 0 / {$glassHighlightOp})";
        $styles[] = "--glass-noise: {$glassNoise}";

        // Regenerate Surface Gradient dynamically
        $styles[] = "--glass-surface: linear-gradient(135deg, oklch(from {$glassBg} l c h / {$glassOpacity}), oklch(from {$glassBg} l c h / " . ($glassOpacity * 0.7) . "))";



        return $styles;
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
