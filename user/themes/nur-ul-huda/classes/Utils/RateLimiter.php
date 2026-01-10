<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

class RateLimiter
{
    protected Grav $grav;

    public function __construct()
    {
        $this->grav = Grav::instance();
    }

    /**
     * Check rate limiting for sensitive operations
     * 
     * @param string $key Unique key for the action
     * @param int $max_attempts Maximum allowed attempts
     * @param int $window Time window in seconds
     * @return bool True if allowed, False if limit exceeded
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
