<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Config\Config;

/**
 * SecurityHelper handles security-related logic for the Nur-ul-Huda theme.
 * Links to Blueprint documentation: theme_security.md (conceptual)
 */
readonly class SecurityHelper
{
    /**
     * Add security headers to HTTP response
     */
    public static function applyHeaders(mixed $config): void
    {
        // Only in production mode if specified
        if (!($config['production-mode'] ?? true)) {
            return;
        }

        // Only add headers if not already sent
        if (headers_sent()) {
            return;
        }

        // X-Frame-Options: Prevent clickjacking
        header('X-Frame-Options: SAMEORIGIN');

        // X-Content-Type-Options: Prevent MIME sniffing
        header('X-Content-Type-Options: nosniff');

        // Referrer-Policy: Control referrer information
        header('Referrer-Policy: strict-origin-when-cross-origin');

        // Permissions-Policy: Restrict browser features
        header('Permissions-Policy: geolocation=(self), microphone=(), camera=()');

        // X-XSS-Protection: Enable XSS filter (legacy browsers)
        header('X-XSS-Protection: 1; mode=block');
    }
}
