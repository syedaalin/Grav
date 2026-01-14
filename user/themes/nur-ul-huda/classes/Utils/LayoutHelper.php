<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

readonly class LayoutHelper
{
    /**
     * @param mixed $config
     * @return array
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
