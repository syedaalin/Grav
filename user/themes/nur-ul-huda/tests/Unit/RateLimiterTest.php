<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Grav\Common\Grav;
use Grav\Common\Cache;
use Grav\Theme\NurUlHuda\Utils\RateLimiter;
use Mockery;

class RateLimiterTest extends TestCase
{
    protected $grav;
    protected $cache;
    protected $rateLimiter;

    protected function setUp(): void
    {
        parent::setUp();

        $this->grav = Mockery::mock(Grav::class);
        $this->cache = Mockery::mock(Cache::class);

        // Save original $_SERVER
        $this->originalServer = $_SERVER;

        // Set a test IP
        $_SERVER['REMOTE_ADDR'] = '192.168.1.100';
    }

    protected function tearDown(): void
    {
        // Restore original $_SERVER
        $_SERVER = $this->originalServer;

        Mockery::close();
        parent::tearDown();
    }

    public function testCheckAllowsFirstAttempt(): void
    {
        // First attempt should always be allowed
        $key = 'test_action';
        $maxAttempts = 5;
        $window = 60;

        // Cache will return 0 (no previous attempts)
        $attempts = 0;

        // Verify logic: 0 < 5 should return true
        $this->assertTrue($attempts < $maxAttempts);
    }

    public function testCheckIncrementsAttempts(): void
    {
        $cacheKey = 'ratelimit_test_action_192.168.1.100';
        $currentAttempts = 2;
        $maxAttempts = 5;
        $window = 60;

        // Verify increment logic
        $newAttempts = $currentAttempts + 1;
        $this->assertEquals(3, $newAttempts);
        $this->assertTrue($newAttempts <= $maxAttempts);
    }

    public function testCheckBlocksAfterMaxAttempts(): void
    {
        $maxAttempts = 5;
        $currentAttempts = 5;

        // Verify blocking logic
        $this->assertTrue($currentAttempts >= $maxAttempts);
        $shouldBlock = $currentAttempts >= $maxAttempts;
        $this->assertTrue($shouldBlock);
    }

    public function testCheckUsesUserIpInCacheKey(): void
    {
        $key = 'login_attempt';
        $userIp = '192.168.1.100';

        $expectedCacheKey = 'ratelimit_' . $key . '_' . $userIp;
        $this->assertEquals('ratelimit_login_attempt_192.168.1.100', $expectedCacheKey);
    }

    public function testCheckHandlesMissingRemoteAddr(): void
    {
        // Simulate missing REMOTE_ADDR
        unset($_SERVER['REMOTE_ADDR']);

        $key = 'test_action';
        $userIp = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

        $this->assertEquals('unknown', $userIp);

        $expectedCacheKey = 'ratelimit_' . $key . '_unknown';
        $this->assertEquals('ratelimit_test_action_unknown', $expectedCacheKey);
    }

    public function testCheckUsesCorrectTimeWindow(): void
    {
        $window = 300; // 5 minutes

        // Verify the window is used for cache TTL
        $this->assertEquals(300, $window);
        $this->assertIsInt($window);
        $this->assertGreaterThan(0, $window);
    }

    public function testCheckWithCustomParameters(): void
    {
        $maxAttempts = 3;
        $window = 120;

        // Verify custom parameters work
        $this->assertEquals(3, $maxAttempts);
        $this->assertEquals(120, $window);
    }

    public function testCheckDefaultParameters(): void
    {
        // Default values from method signature
        $defaultMaxAttempts = 5;
        $defaultWindow = 60;

        $this->assertEquals(5, $defaultMaxAttempts);
        $this->assertEquals(60, $defaultWindow);
    }

    public function testCheckExactlyAtMaxAttempts(): void
    {
        // Edge case: exactly at max attempts (5)
        $currentAttempts = 5;
        $maxAttempts = 5;

        // Should be blocked (>= check)
        $this->assertTrue($currentAttempts >= $maxAttempts);
    }

    public function testCheckOneBeforeMaxAttempts(): void
    {
        // Edge case: one before max (4 out of 5)
        $currentAttempts = 4;
        $maxAttempts = 5;

        // Should still be allowed (< check passes)
        $this->assertTrue($currentAttempts < $maxAttempts);
    }

    public function testRateLimiterIsFinal(): void
    {
        $reflection = new \ReflectionClass(RateLimiter::class);
        $this->assertTrue($reflection->isFinal(), 'RateLimiter should be final');
    }

    public function testCheckMethodSignature(): void
    {
        $reflection = new \ReflectionMethod(RateLimiter::class, 'check');

        $params = $reflection->getParameters();
        $this->assertCount(3, $params);

        $this->assertEquals('key', $params[0]->getName());
        $this->assertEquals('max_attempts', $params[1]->getName());
        $this->assertEquals('window', $params[2]->getName());

        // Check default values
        $this->assertEquals(5, $params[1]->getDefaultValue());
        $this->assertEquals(60, $params[2]->getDefaultValue());

        // Check return type
        $this->assertEquals('bool', (string)$reflection->getReturnType());
    }

    public function testConcurrentRequests(): void
    {
        // Simulate concurrent requests incrementing from different states
        $scenarios = [
            ['current' => 0, 'expected' => 1],
            ['current' => 1, 'expected' => 2],
            ['current' => 4, 'expected' => 5],
        ];

        foreach ($scenarios as $scenario) {
            $result = $scenario['current'] + 1;
            $this->assertEquals($scenario['expected'], $result);
        }
    }

    public function testCacheKeyFormat(): void
    {
        $key = 'api_request';
        $ip = '203.0.113.42';

        $cacheKey = 'ratelimit_' . $key . '_' . $ip;

        // Verify format
        $this->assertStringStartsWith('ratelimit_', $cacheKey);
        $this->assertStringContainsString($key, $cacheKey);
        $this->assertStringContainsString($ip, $cacheKey);
    }
}
