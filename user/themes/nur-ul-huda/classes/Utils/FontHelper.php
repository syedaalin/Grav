<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

/**
 * SRP: Responsibility for font-related logic (Blueprints options, Custom CSS).
 */
readonly final class FontHelper
{
    /**
     * Get font options for Blueprints dropdown.
     */
    public static function getFontOptions(): array
    {
        $options = [
            "sans-serif" => "System Sans",
            "serif" => "System Serif"
        ];

        // Fetch custom fonts from theme config
        $config = Grav::instance()['config']->get('themes.nur-ul-huda');

        if (isset($config['custom_fonts']) && is_array($config['custom_fonts'])) {
            foreach ($config['custom_fonts'] as $fileObject) {
                if (isset($fileObject['name'])) {
                    $fileName = $fileObject['name'];
                    $name = pathinfo($fileName, PATHINFO_FILENAME);

                    // Sanitize Name for CSS
                    if (!str_contains($name, "'")) {
                        $safeKey = "'{$name}', sans-serif";
                    } else {
                        $safeKey = "{$name}, sans-serif";
                    }

                    $options[$safeKey] = "$name (Custom)";
                }
            }
        }

        return $options;
    }

    /**
     * Generate CSS for custom uploaded fonts.
     */
    public static function getCustomFontsCss(mixed $config): string
    {
        $customFontCss = '';
        if (!empty($config['custom_fonts']) && is_array($config['custom_fonts'])) {
            $grav = Grav::instance();
            foreach ($config['custom_fonts'] as $fileObject) {
                if (isset($fileObject['path']) && isset($fileObject['name'])) {
                    $fontPath = $grav['base_url'] . '/' . $fileObject['path'];

                    // Use filename as font-family
                    $fileName = $fileObject['name'];
                    $fontFamily = pathinfo($fileName, PATHINFO_FILENAME);

                    $customFontCss .= "
                    @font-face {
                        font-family: '{$fontFamily}';
                        src: url('{$fontPath}') format('woff2');
                        font-weight: 100 900;
                        font-style: auto;
                        font-display: swap;
                    } ";
                }
            }
        }
        return $customFontCss;
    }
}
