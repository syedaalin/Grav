<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

final class SecurityLogger
{
    protected Grav $grav;

    public function __construct()
    {
        $this->grav = Grav::instance();
    }

    /**
     * Check rate limiting for sensitive operations.
     *
     * Delegates to RateLimiter to enforce request throttling for sensitive
     * operations (login attempts, form submissions, API calls). Uses sliding
     * window algorithm for accurate rate limiting. Follows SRP by delegating
     * to specialized RateLimiter class.
     *
     * @param string $key Unique identifier for the rate-limited resource (e.g., "login:192.168.1.1")
     * @param int $max_attempts Maximum allowed attempts within the time window (default: 5)
     * @param int $window Time window in seconds for rate limit enforcement (default: 60)
     * @return bool True if request is allowed, false if rate limit exceeded
     */
    public static function checkRateLimit(string $key, int $max_attempts = 5, int $window = 60): bool
    {
        $limiter = new RateLimiter();
        return (bool) $limiter->check($key, $max_attempts, $window);
    }

    /**
     * Enhanced security logging with contextual metadata.
     *
     * Logs security-related events with IP address, user agent, and timestamp
     * for forensic analysis and audit trails. Automatically enriches log messages
     * with context to aid in security incident investigation. Uses match expression
     * for clean level-based routing to appropriate Grav log channels.
     *
     * @param string $message The security event description
     * @param string $level Log severity level: 'security'/'error', 'warning', or 'info' (default)
     * @return void Logs are written to Grav's logging system
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
