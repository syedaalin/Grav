<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for top banner announcement logic.
 */
readonly class TopBannerHelper
{
    /**
     * @param array|Config $config
     * @return array
     */
    public static function getData(mixed $config): array
    {
        $enabled = $config['top_banner_enabled'] ?? true;
        if (is_string($enabled)) {
            $enabled = ($enabled === '1' || $enabled === 'true');
        }

        $widgetsOrder = $config['top_banner_widgets_order'] ?? ['date', 'prayer', 'hijri'];
        if (is_string($widgetsOrder)) {
            $widgetsOrder = array_map('trim', explode(',', $widgetsOrder));
        }
        $announcementText = $config['top_banner_announcement_text'] ?? null;
        $tickerEnabled = $config['top_banner_announcement_enabled'] ?? false;

        $showAnnouncement = false;
        $timezone = 'Asia/Karachi';

        if ($tickerEnabled && $announcementText) {
            $starts = $config['top_banner_announcement_starts'] ?? null;
            $expires = $config['top_banner_announcement_expires'] ?? null;

            try {
                $tz = new \DateTimeZone($timezone);
                $now = new \DateTime('now', $tz);

                $isStarted = true;
                if ($starts) {
                    $startDt = new \DateTime($starts, $tz);
                    $isStarted = $startDt->getTimestamp() <= $now->getTimestamp();
                }

                $isActive = true;
                if ($expires) {
                    $expiresDt = new \DateTime($expires, $tz);
                    $isActive = $expiresDt->getTimestamp() > $now->getTimestamp();
                }

                if ($isStarted && $isActive) {
                    $showAnnouncement = true;
                }
            } catch (\Exception $e) {
                // Keep showAnnouncement false on error
            }
        }

        return [
            'active' => $enabled,
            'widgets_order' => $widgetsOrder,
            'show_announcement' => $showAnnouncement,
            'announcement_text' => $announcementText,
            'announcement_speed' => $config['top_banner_announcement_speed'] ?? 20,
            'bg_color' => $showAnnouncement
                ? ($config['top_banner_announcement_bg_color'] ?? 'oklch(0.55 0.25 25)')
                : ($config['top_banner_bg_color'] ?? 'oklch(0.2 0.02 260)'),
            'text_color' => $showAnnouncement
                ? ($config['top_banner_announcement_text_color'] ?? 'oklch(0.98 0 0)')
                : ($config['top_banner_text_color'] ?? 'oklch(0.85 0.15 85)'),
            'use_glass' => $config['top_banner_glass'] ?? false,
            'border_type' => $config['top_banner_border'] ?? 'bottom',
            'mobile_hide' => $config['top_banner_mobile_hide'] ?? [],
            'pause_on_hover' => $config['top_banner_announcement_pause'] ?? true
        ];
    }
}
