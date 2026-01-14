<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for preparing JSON-LD structured data for search engines.
 */
readonly class SchemaHelper
{
    /**
     * @param mixed $config
     * @param array $staticData
     * @return array
     */
    public static function getSchemaData(mixed $config, array $staticData): array
    {
        $socials = [];
        foreach (['facebook', 'twitter', 'instagram', 'youtube', 'telegram', 'whatsapp'] as $platform) {
            if (!empty($config["social_{$platform}"])) {
                $socials[] = $config["social_{$platform}"];
            }
        }

        return [
            'orgName' => $staticData['site_name'],
            'phone' => $config['contact_phone'] ?? null,
            'email' => $config['social_email'] ?? null,
            'address' => isset($config['contact_address']) ? \str_replace("\n", ", ", (string)$config['contact_address']) : null,
            'socials' => $socials
        ];
    }
}
