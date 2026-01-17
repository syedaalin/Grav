<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SRP: Responsibility for preparing JSON-LD structured data for search engines.
 */
readonly final class SchemaHelper
{
    /**
     * Prepare JSON-LD structured data for search engine optimization.
     *
     * Extracts organization schema data from theme configuration, compiling
     * social media profiles, contact information, and address. This data
     * is used to generate schema.org/Organization markup for better SEO
     * and rich snippet display in search results. Follows SRP by focusing
     * solely on schema data preparation.
     *
     * @param mixed $config Theme configuration containing social/contact settings
     * @param array $staticData Static site data (site_name, etc.)
     * @return array Schema data structure containing:
     *               - orgName: Organization name for schema:name
     *               - phone: Contact phone number (nullable)
     *               - email: Contact email address (nullable)
     *               - address: Formatted address string (newlines converted to commas)
     *               - socials: Array of social media profile URLs
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
