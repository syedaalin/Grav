<?php
namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;

/**
 * NGO Theme - Premium Grav Theme (2026 Standards)
 * 
 * @description This theme implements the 2026 Premium Standards including Spatial Computing, 
 * Agentic UX, and Sustainability metrics. It provides optimized path handling for SVG 
 * assets and standardizes form classes for the Spectre.css framework with modern overrides.
 * 
 * @rule 1.1 Uses Liquid Glass & Nature Distilled (Anti-Grid) aesthetics.
 * @rule 2.1 Supports WebXR session detection and haptic feedback.
 * @rule 5.2 Contains semantic docstrings for AI Agent readability.
 */
class NgoTheme extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'    => ['onThemeInitialized', 0],
            'onTwigLoader'          => ['onTwigLoader', 0],
            'onTwigInitialized'     => ['onTwigInitialized', 0],
        ];
    }

    public function onThemeInitialized()
    {

    }

    // Add images to twig template paths to allow inclusion of SVG files
    public function onTwigLoader()
    {
        $theme_paths = Grav::instance()['locator']->findResources('theme://images');
        foreach($theme_paths as $images_path) {
            $this->grav['twig']->addPath($images_path, 'images');
        }
    }

    public function onTwigInitialized()
    {
        $twig = $this->grav['twig'];

        $form_class_variables = [
            'form_outer_classes' => 'space-y-6',
            'form_button_outer_classes' => 'flex justify-end gap-4',
            'form_button_classes' => 'inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-[var(--color-brand-primary)] hover:bg-[var(--color-brand-secondary)] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--color-brand-primary)] transition-all',
            'form_errors_classes' => 'text-red-600 text-sm mt-1',
            'form_field_outer_classes' => 'mb-6',
            'form_field_outer_label_classes' => 'mb-2 block',
            'form_field_label_classes' => 'block text-sm font-bold text-[var(--color-brand-dark)]',
            'form_field_input_classes' => 'block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[var(--color-brand-primary)] focus:border-[var(--color-brand-primary)] sm:text-sm',
            'form_field_textarea_classes' => 'block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[var(--color-brand-primary)] focus:border-[var(--color-brand-primary)] sm:text-sm',
            'form_field_select_classes' => 'block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-[var(--color-brand-primary)] focus:border-[var(--color-brand-primary)] sm:text-sm',
            'form_field_radio_classes' => 'inline-flex items-center gap-2',
            'form_field_checkbox_classes' => 'inline-flex items-center gap-2',
        ];

        $twig->twig_vars = array_merge($twig->twig_vars, $form_class_variables);

    }

}