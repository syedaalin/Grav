<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

/**
 * SRP: Responsibility for delegating banner logic to specialized helpers.
 * This class now acts as a facade for backward compatibility.
 */
readonly class BannerHelper
{
    /**
     * @param mixed $config
     * @return array
     */
    public static function getTopBannerData(mixed $config): array
    {
        return TopBannerHelper::getData($config);
    }

    /**
     * @param mixed $config
     * @return array
     */
    public static function getBottomBannerData(mixed $config): array
    {
        return BottomBannerHelper::getData($config);
    }
}
