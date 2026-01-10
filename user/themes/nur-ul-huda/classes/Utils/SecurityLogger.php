<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

class SecurityLogger
{
    protected Grav $grav;

    public function __construct()
    {
        $this->grav = Grav::instance();
    }

    /**
     * Check rate limiting for sensitive operations
     * Proxies to RateLimiter
     * 
     * @param string $key
     * @param int $max_attempts
     * @param int $window
     * @return bool
     */
    public function checkRateLimit(string $key, int $max_attempts = 5, int $window = 60): bool
    {
        $limiter = new RateLimiter();
        return (bool) $limiter->check($key, $max_attempts, $window);
    }

    /**
     * Enhanced security logging with context
     * 
     * @param string $message
     * @param string $level
     * @return void
     */
    public function log(string $message, string $level = 'info'): void
    {
        $context = [
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $log_message = $message . ' | ' . \json_encode($context);

        /** @var \Grav\Common\Log\Log $logger */
        $logger = $this->grav['log'];

        match ($level) {
            'security', 'error' => $logger->error($log_message),
            'warning' => $logger->warning($log_message),
            default => $logger->info($log_message),
        };
    }
}
