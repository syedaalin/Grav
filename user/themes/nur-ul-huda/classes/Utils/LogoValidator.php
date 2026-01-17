<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

final class LogoValidator
{
    /**
     * @param mixed $value
     * @return bool
     * @throws \RuntimeException
     */
    public static function validate(mixed $value): bool
    {
        // If no logo is set, we don't validate (it's optional or handled elsewhere)
        if (empty($value)) {
            return true;
        }

        /** @var array $value */
        foreach ($value as $filename => $data) {
            // Find absolute path to the uploaded file
            /** @var string|bool $path */
            $path = Grav::instance()['locator']->findResource("theme://images/logo/$filename");

            // If the file exists, check dimensions
            if ($path && \file_exists($path)) {
                $size = @\getimagesize($path);
                if ($size) {
                    [$width, $height] = $size;
                    if ($width !== $height) {
                        throw new \RuntimeException(\sprintf('Logo "%s" is %dx%dpx. It MUST be 1:1 aspect ratio (Square). Please upload a square image (e.g. 512x512).', $filename, $width, $height));
                    }
                }
            }
        }
        return true;
    }
}
