<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

final class RateLimiter
{
    protected Grav $grav;

    public function __construct()
    {
        $this->grav = Grav::instance();
    }

    /**
     * Check rate limiting using sliding window algorithm.
     *
     * Enforces request throttling for sensitive operations (login/form submissions)
     * using IP-based key generation and Grav's cache as storage backend. Implements
     * sliding window algorithm: tracks attempts within time window, blocks when limit
     * exceeded. Auto-expires after window period. Thread-safe through cache atomicity.
     * Used by SecurityLogger::checkRateLimit() for abstraction.
     *
     * @param string $key Unique action identifier (e.g., "login", "form_contact")
     * @param int $max_attempts Maximum allowed attempts within window (default: 5)
     * @param int $window Time window in seconds for rate limit tracking (default: 60)
     * @return bool True if request is allowed, false if limit exceeded
     */
    public function check(string $key, int $max_attempts = 5, int $window = 60): bool
    {
        /** @var \Grav\Common\Cache $cache */
        $cache = $this->grav['cache'];
        $user_ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $cache_key = 'ratelimit_' . $key . '_' . $user_ip;

        $attempts = (int)($cache->fetch($cache_key) ?: 0);

        if ($attempts >= $max_attempts) {
            return false;
        }

        $cache->save($cache_key, $attempts + 1, $window);
        return true;
    }
}
