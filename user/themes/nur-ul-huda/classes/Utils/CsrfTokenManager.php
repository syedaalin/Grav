<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Grav;

/**
 * CSRF Token Manager
 * Provides Cross-Site Request Forgery protection for forms
 */
class CsrfTokenManager
{
    protected Grav $grav;
    protected string $tokenName = 'csrf_token';
    protected int $tokenLifetime = 3600; // 1 hour

    public function __construct()
    {
        $this->grav = Grav::instance();
    }

    /**
     * Generate a new CSRF token
     * 
     * @return string The generated token
     */
    public function generateToken(): string
    {
        /** @var \Grav\Common\Session $session */
        $session = $this->grav['session'];

        $token = bin2hex(random_bytes(32));
        $timestamp = time();

        $session->setFlashObject($this->tokenName, [
            'token' => $token,
            'timestamp' => $timestamp
        ]);

        return $token;
    }

    /**
     * Validate a CSRF token
     * 
     * @param string $token The token to validate
     * @return bool True if valid, false otherwise
     */
    public function validateToken(string $token): bool
    {
        /** @var \Grav\Common\Session $session */
        $session = $this->grav['session'];

        $storedData = $session->getFlashObject($this->tokenName);

        if (!$storedData || !is_array($storedData)) {
            return false;
        }

        // Check if token has expired
        if (isset($storedData['timestamp']) && (time() - $storedData['timestamp']) > $this->tokenLifetime) {
            return false;
        }

        // Timing-safe comparison
        if (!isset($storedData['token'])) {
            return false;
        }

        return hash_equals($storedData['token'], $token);
    }

    /**
     * Get the token name for form fields
     * 
     * @return string
     */
    public function getTokenName(): string
    {
        return $this->tokenName;
    }

    /**
     * Get token for embedding in forms
     * 
     * @return array Token data for forms
     */
    public function getTokenData(): array
    {
        $token = $this->generateToken();

        return [
            'name' => $this->tokenName,
            'value' => $token
        ];
    }
}
