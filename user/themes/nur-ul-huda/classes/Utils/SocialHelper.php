<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for preparing social media data for templates.
 * Delegates icon management to IconRegistry.
 */

readonly class SocialHelper
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
     * @param array|Config $config
     * @return array
     */
    public static function getSocialData(mixed $config): array
    {
        $items = [];
        foreach (self::PLATFORMS as $platform) {
            $url = $config["social_{$platform}"] ?? null;
            $enabled = $config["social_{$platform}_enabled"] ?? (bool)$url;

            if ($url && $enabled) {
                $items[] = [
                    'name' => $platform,
                    'url' => $url,
                    'svg' => IconRegistry::getSvgPath($platform),
                    'label' => ucwords(str_replace('_', ' ', $platform))
                ];
            }
        }

        // Dedicated Phone & Email handling
        foreach (['phone', 'email'] as $special) {
            $value = $config["social_{$special}"] ?? null;
            if ($value && ($config["social_{$special}_enabled"] ?? true)) {
                $items[] = [
                    'name' => $special,
                    'url' => ($special === 'phone' ? 'tel:' . preg_replace('/[^\d+]/', '', (string)$value) : 'mailto:' . $value),
                    'svg' => IconRegistry::getSvgPath($special),
                    'label' => ucfirst($special)
                ];
            }
        }

        return [
            'items' => $items,
            'show_labels_mobile' => $config['social_show_labels_mobile'] ?? $config['bottom_banner_show_social_labels_mobile'] ?? false,
            'show_labels_desktop' => $config['social_show_labels_desktop'] ?? $config['bottom_banner_show_social_labels_desktop'] ?? false,
        ];
    }
}
