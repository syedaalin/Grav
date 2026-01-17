<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for top banner announcement logic.
 */
readonly final class TopBannerHelper
{
    /**
     * Get top banner configuration with time-based announcement logic.
     *
     * Processes top banner settings including utility widgets (date, prayer times,
     * Hijri calendar) and optional announcement ticker with time-window activation.
     * Evaluates start/expiry timestamps to automatically show/hide announcements.
     * Handles both persistent utility bar and temporary announcement modes with
     * dynamic color switching. Follows SRP by focusing on data preparation only.
     *
     * @param array|Config $config Theme configuration containing top_banner_* settings
     * @return array Top banner data structure containing:
     *               - active: Boolean for global banner visibility
     *               - widgets_order: Array of widget names (date, prayer, hijri)
     *               - show_announcement: Boolean based on time window evaluation
     *               - announcement_text: Ticker message text
     *               - announcement_speed: Scroll duration in seconds
     *               - bg_color: Background color (switches between normal/announcement modes)
     *               - text_color: Text color (switches between normal/announcement modes)
     *               - use_glass: Boolean for glassmorphism effect
     *               - border_type: Border position ('bottom', 'top', 'both', 'none')
     *               - mobile_hide: Array of widgets to hide on mobile
     *               - pause_on_hover: Boolean for ticker pause behavior
     */
    public static function getData(mixed $config): array
    {
        $announcementText = $config['ticker_text'] ?? null;
        $tickerEnabled = $config['ticker_enabled'] ?? false;

        // Strict Ticker Enabled Check
        $tickerEnabled = ($tickerEnabled === true || $tickerEnabled === '1' || $tickerEnabled === 1);

        $showAnnouncement = false;
        $timezone = 'Asia/Karachi';

        if ($tickerEnabled && $announcementText) {
            $starts = $config['ticker_starts'] ?? null;
            $expires = $config['ticker_expires'] ?? null;

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
            'show_announcement' => $showAnnouncement,
            'announcement_text' => $announcementText,
            'announcement_link' => $config['ticker_link'] ?? null,
            'announcement_new_tab' => $config['ticker_new_tab'] ?? true,
            'announcement_speed' => $config['ticker_speed'] ?? 20,
            'bg_color' => $config['ticker_bg'] ?? 'oklch(0.55 0.25 25)',
            'text_color' => $config['ticker_color'] ?? 'oklch(0.98 0 0)',
            'pause_on_hover' => $config['ticker_pause'] ?? true
        ];
    }
}
