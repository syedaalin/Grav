<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;
use Grav\Common\Config\Config;

readonly final class MediaHelper
{
    /**
     * Extract and prepare hero section data from page header.
     *
     * Processes page frontmatter to retrieve hero image/video, falling back
     * to first available media if no specific hero media is configured.
     * Handles both simple string references and array-based file objects.
     *
     * @param array $header Page header/frontmatter data
     * @param \Grav\Common\Page\Media $media Page media collection
     * @return array Hero data structure containing:
     *               - id: Section identifier (default: 'hero')
     *               - classes: CSS class string for styling
     *               - accent_color: OKLCH color for accents
     *               - image: Hero image media object (null if none)
     *               - video: Hero video media object (null if none)
     */
    public static function getHeroData(array $header, mixed $media): array
    {
        $heroImage = null;
        if (!empty($header['hero_image'])) {
            $heroImage = $media->images()[$header['hero_image']] ?? null;
        }
        if (!$heroImage) {
            $heroImage = \reset($media->images()) ?: null;
        }

        $heroVideo = null;
        if (!empty($header['hero_video'])) {
            $videoData = $header['hero_video'];
            if (is_array($videoData)) {
                $videoFile = \reset($videoData);
                $heroVideo = $media[$videoFile['name']] ?? null;
            } else {
                $heroVideo = $media[$videoData] ?? null;
            }
        }

        return [
            'id' => $header['id'] ?? 'hero',
            'classes' => $header['hero_classes'] ?? '',
            'accent_color' => $header['hero_accent'] ?? 'oklch(0.65 0.22 260)',
            'image' => $heroImage,
            'video' => $heroVideo
        ];
    }

    /**
     * Extract and prepare logo data from theme configuration.
     *
     * Retrieves custom logo from config, processes it into responsive sizes
     * (mobile: 80×80, desktop: 160×160), and combines with site identity info.
     * Falls back gracefully if no custom logo is configured.
     *
     * @param array|Config $config Theme configuration (array or Config object)
     * @param \Grav\Common\Page\Media $media Theme media collection for logo assets
     * @return array Logo data structure containing:
     *               - image: Logo media object (null if none)
     *               - image_mobile/image_desktop: Responsive URLs
     *               - width_mobile/height_mobile: Mobile dimensions (80×80)
     *               - width_desktop/height_desktop: Desktop dimensions (160×160)
     *               - site_name: Organization name for alt text
     *               - site_title: Site title from Grav config
     */
    public static function getLogoData(mixed $config, mixed $media): array
    {
        $customLogoFile = $config['custom_logo'] ?? null;
        $logoImage = null;

        if ($customLogoFile) {
            $file = is_array($customLogoFile) ? \reset($customLogoFile) : $customLogoFile;
            $logoImage = $media["theme://images/logo/{$file['name']}"] ?? null;
        }

        $siteName = $config['site_name'] ?? Grav::instance()['config']->get('site.title');
        $siteTitle = Grav::instance()['config']->get('site.title');

        return [
            'image' => $logoImage,
            'image_mobile' => $logoImage ? $logoImage->resize(80, 80)->url() : null,
            'image_desktop' => $logoImage ? $logoImage->resize(160, 160)->url() : null,
            'width_mobile' => 80,
            'height_mobile' => 80,
            'width_desktop' => 160,
            'height_desktop' => 160,
            'site_name' => $siteName,
            'site_title' => $siteTitle
        ];
    }
}
