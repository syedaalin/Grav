<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

readonly class NavigationHelper
{
    /**
     * @param string $baseUrl
     * @param string $params
     * @param string $pageUrl
     * @return string
     */
    public static function getPaginationUrl(string $baseUrl, string $params, string $pageUrl): string
    {
        return str_replace('//', '/', $baseUrl . $params . $pageUrl);
    }

    /**
     * @param array $crumbs
     * @return array
     */
    public static function getBreadcrumbsData(array $crumbs): array
    {
        return array_map(fn($crumb) => [
            'url' => $crumb['url'],
            'menu' => $crumb['menu'],
        ], $crumbs);
    }
}
