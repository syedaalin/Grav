<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

readonly final class LayoutHelper
{
    /**
     * Process sidebar configuration and enabled widgets.
     *
     * Filters sidebar widgets based on individual enable/disable settings,
     * respecting the configured widget order. Only includes widgets that
     * are both in the widgets_order array AND individually enabled.
     * Follows SRP by focusing solely on sidebar data preparation.
     *
     * @param mixed $config Theme configuration containing sidebar settings
     * @return array Sidebar data structure containing:
     *               - active: Boolean indicating if sidebar is globally enabled
     *               - widgets: Ordered array of enabled widget names
     */
    public static function getSidebarData(mixed $config): array
    {
        $enabled = $config['sidebar_enabled'] ?? true;
        $widgetsOrder = $config['sidebar_widgets_order'] ?? ['search', 'related', 'random', 'taxonomy', 'archives', 'feed'];

        $widgets = [];
        foreach ($widgetsOrder as $widget) {
            $is_enabled = $config["sidebar_{$widget}_enabled"] ?? true;
            if ($is_enabled) {
                $widgets[] = $widget;
            }
        }

        return [
            'active' => $enabled,
            'widgets' => $widgets
        ];
    }
}
