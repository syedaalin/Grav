<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for generating dynamic CSS styles and variables.
 */
readonly final class StyleHelper
{
    /**
     * Generate dynamic CSS custom properties from theme configuration.
     *
     * Combines all dynamic style generators to produce inline CSS variable
     * declarations. These are injected into the HTML style attribute for
     * runtime theme customization without rebuilding CSS files. Follows SRP
     * by delegating to specialized private methods.
     *
     * @param array|Config $config Theme configuration
     * @return array<string> Array of CSS declarations (e.g., "--color-primary: oklch(...)")
     */
    public static function getDynamicStyles(mixed $config): array
    {
        return array_merge(
            self::getColorStyles($config),

            // Glass styles removed as per user request to decommission Liquid Glass
            self::getHeaderStyles($config)
        );
    }

    /**
     * Generate CSS custom properties for theme colors.
     *
     * Extracts primary and accent color configurations and formats them
     * as CSS variable declarations for runtime theme customization.
     *
     * @param array|Config $config Theme configuration
     * @return array<string> Color CSS declarations
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
     * Generate CSS custom properties for header spacing.
     *
     * Provides configurable header padding as a CSS variable for
     * consistent spacing across header components.
     *
     * @param array|Config $config Theme configuration
     * @return array<string> Header CSS declarations
     */
    private static function getHeaderStyles(mixed $config): array
    {
        return [
            "--header-padding: " . ($config['header_padding'] ?? '1rem')
        ];
    }
}
