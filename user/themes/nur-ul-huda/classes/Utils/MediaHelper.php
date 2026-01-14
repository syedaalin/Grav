<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;
use Grav\Common\Config\Config;

readonly class MediaHelper
{
    /**
     * @param array $header
     * @param \Grav\Common\Page\Media $media
     * @return array
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
     * @param array|Config $config
     * @param \Grav\Common\Page\Media $media
     * @return array
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
