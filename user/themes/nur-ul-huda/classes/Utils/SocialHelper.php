<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for preparing social media data for templates.
 * Delegates icon management to IconRegistry.
 */

readonly final class SocialHelper
{
    private const PLATFORMS = [
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'telegram',
        'linkedin',
        'tiktok',
        'pinterest',
        'snapchat',
        'spotify',
        'discord',
        'whatsapp',
        'google_maps'
    ];

    /**
     * Process social media network configuration into template-ready data.
     *
     * Transforms raw social network config into structured data with SVG icons,
     * labels, and properly formatted URLs. Handles special cases for phone
     * (tel:) and email (mailto:) links. Delegates icon management to IconRegistry
     * following SRP. Filters out disabled networks automatically.
     *
     * @param array|Config $config Theme configuration containing social_networks array
     * @return array Social data structure containing:
     *               - items: Array of network objects with name, url, svg, label
     *               - show_labels_mobile: Boolean for mobile label visibility
     *               - show_labels_desktop: Boolean for desktop label visibility
     */
    public static function getSocialData(mixed $config): array
    {
        $items = [];
        $networks = $config['social_networks'] ?? [];

        foreach ($networks as $network) {
            if (empty($network['enabled']) || empty($network['url'])) {
                continue;
            }

            $platform = $network['network'];
            $url = $network['url'];

            // Handle phone/email special cases
            if ($platform === 'phone') {
                $url = 'tel:' . preg_replace('/[^\d+]/', '', (string)$url);
            } elseif ($platform === 'email') {
                $url = 'mailto:' . $url;
            }

            $items[] = [
                'name' => $platform,
                'url' => $url,
                'svg' => IconRegistry::getSvgPath($platform),
                'label' => ucwords(str_replace('_', ' ', $platform))
            ];
        }

        return [
            'items' => $items,
            'show_labels_mobile' => $config['social_show_labels_mobile'] ?? $config['bottom_banner_show_social_labels_mobile'] ?? false,
            'show_labels_desktop' => $config['social_show_labels_desktop'] ?? $config['bottom_banner_show_social_labels_desktop'] ?? false,
        ];
    }
}
