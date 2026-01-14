<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for generating dynamic CSS styles and variables.
 */
readonly class StyleHelper
{
    /**
     * @param array|Config $config
     * @return array<string>
     */
    public static function getDynamicStyles(mixed $config): array
    {
        return array_merge(
            self::getColorStyles($config),
            self::getGlassStyles($config),
            self::getHeaderStyles($config)
        );
    }

    /**
     * @param array|Config $config
     * @return array<string>
     */
    private static function getColorStyles(mixed $config): array
    {
        $styles = [];
        if (!empty($config['primary_spirit_color'])) {
            $styles[] = "--color-primary: {$config['primary_spirit_color']}";
        }
        if (!empty($config['accent_color'])) {
            $styles[] = "--color-accent: {$config['accent_color']}";
        }
        return $styles;
    }

    /**
     * @param array|Config $config
     * @return array<string>
     */
    private static function getGlassStyles(mixed $config): array
    {
        $glassBg = $config['glass_bg_color'] ?? '#ffffff';

        // PHP 8.5+ Pipe Operator usage as requested in stack
        $glassOpacity = ($config['glass_opacity'] ?? 65) |> (fn($v) => $v <= 1 ? $v : $v / 100)(...);
        $glassBlur = ($config['glass_blur'] ?? 16) |> (fn($v) => is_numeric($v) ? "{$v}px" : $v)(...);
        $glassBorderOp = ($config['glass_border_opacity'] ?? 15) |> (fn($v) => $v <= 1 ? $v : $v / 100)(...);
        $glassHighlightOp = ($config['glass_highlight'] ?? 40) |> (fn($v) => $v <= 1 ? $v : $v / 100)(...);

        $enableNoise = $config['glass_noise'] ?? true;
        $noiseUrl = 'url("data:image/svg+xml,%3Csvg viewBox=\'0 0 200 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noiseFilter\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.65\' numOctaves=\'3\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noiseFilter)\' opacity=\'0.05\'/%3E%3C/svg%3E")';
        $glassNoise = $enableNoise ? $noiseUrl : 'none';

        return [
            "--glass-bg: {$glassBg}",
            "--glass-opacity: {$glassOpacity}",
            "--glass-blur: {$glassBlur}",
            "--blur-strength: {$glassBlur}", // Legacy mapping
            "--glass-border: 1px solid oklch(1 0 0 / {$glassBorderOp})",
            "--glass-highlight: oklch(1 0 0 / {$glassHighlightOp})",
            "--glass-noise: {$glassNoise}",
            "--glass-surface: linear-gradient(135deg, oklch(from {$glassBg} l c h / {$glassOpacity}), oklch(from {$glassBg} l c h / " . ($glassOpacity * 0.7) . "))"
        ];
    }

    /**
     * @param array|Config $config
     * @return array<string>
     */
    private static function getHeaderStyles(mixed $config): array
    {
        return [
            "--header-padding: " . ($config['header_padding'] ?? '1rem')
        ];
    }
}
