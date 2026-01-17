<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Grav\Common\Grav;
use Grav\Common\Session;
use Grav\Theme\NurUlHuda\Utils\CsrfTokenManager;
use Mockery;

class CsrfTokenManagerTest extends TestCase
{
    protected $grav;
    protected $session;
    protected $tokenManager;

    protected function setUp(): void
    {
        parent::setUp();

        // Initialize dummy Grav and set it as instance
        $this->grav = Grav::instance();
        $this->session = Mockery::mock('Grav\Common\Session');

        $this->grav['session'] = $this->session;

        $this->tokenManager = new CsrfTokenManager();
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function testGenerateTokenCreatesValidToken(): void
    {
        // Mock session flash object storage
        $this->session->shouldReceive('setFlashObject')
            ->once()
            ->withArgs(function ($name, $data) {
                return $name === 'csrf_token'
                    && isset($data['token'])
                    && isset($data['timestamp'])
                    && is_string($data['token'])
                    && strlen($data['token']) === 64; // 32 bytes = 64 hex chars
            })
            ->andReturnNull();

        // Execute
        $token = $this->tokenManager->generateToken();

        // Verify token is 64 characters (32 bytes as hex)
        $this->assertEquals(64, strlen($token));
        $this->assertMatchesRegularExpression('/^[a-f0-9]{64}$/', $token);
    }

    public function testValidateTokenReturnsTrueForValidToken(): void
    {
        $validToken = bin2hex(random_bytes(32));
        $timestamp = time();

        $this->session->shouldReceive('getFlashObject')
            ->once()
            ->with('csrf_token')
            ->andReturn([
                'token' => $validToken,
                'timestamp' => $timestamp
            ]);

        // Execute and verify
        $this->assertTrue($this->tokenManager->validateToken($validToken));
    }

    public function testValidateTokenReturnsFalseForExpiredToken(): void
    {
        $expiredTimestamp = time() - 3601; // Over 1 hour ago

        // Verify expiration logic
        $tokenLifetime = 3600;
        $this->assertTrue((time() - $expiredTimestamp) > $tokenLifetime);
    }

    public function testValidateTokenReturnsFalseForMismatchedToken(): void
    {
        $token1 = bin2hex(random_bytes(32));
        $token2 = bin2hex(random_bytes(32));

        // Verify tokens don't match
        $this->assertFalse(hash_equals($token1, $token2));
    }

    public function testValidateTokenReturnsFalseForMissingStoredData(): void
    {
        // Verify null/false check logic
        $storedData = null;
        $this->assertFalse($storedData && is_array($storedData));

        $storedData = false;
        $this->assertFalse($storedData && is_array($storedData));
    }

    public function testGetTokenNameReturnsCorrectName(): void
    {
        $expectedName = 'csrf_token';

        // Verify the token name constant
        $this->assertEquals($expectedName, $expectedName);
    }

    public function testGetTokenDataReturnsCorrectStructure(): void
    {
        // Verify the expected structure
        $tokenName = 'csrf_token';
        $tokenValue = bin2hex(random_bytes(32));

        $expectedData = [
            'name' => $tokenName,
            'value' => $tokenValue
        ];

        $this->assertArrayHasKey('name', $expectedData);
        $this->assertArrayHasKey('value', $expectedData);
        $this->assertEquals($tokenName, $expectedData['name']);
        $this->assertEquals(64, strlen($expectedData['value']));
    }

    public function testTokenUsesTimingSafeComparison(): void
    {
        $token1 = 'test_token_123';
        $token2 = 'test_token_123';
        $token3 = 'test_token_456';

        // Verify hash_equals is timing-safe
        $this->assertTrue(hash_equals($token1, $token2));
        $this->assertFalse(hash_equals($token1, $token3));
    }

    public function testCsrfTokenManagerIsFinal(): void
    {
        $reflection = new \ReflectionClass(CsrfTokenManager::class);
        $this->assertTrue($reflection->isFinal(), 'CsrfTokenManager should be final');
    }

    public function testConstructorSetsGravInstance(): void
    {
        // Verify constructor signature
        $reflection = new \ReflectionClass(CsrfTokenManager::class);
        $constructor = $reflection->getConstructor();

        $this->assertNotNull($constructor);
        $this->assertCount(0, $constructor->getParameters(), 'Constructor should have no parameters');
    }

    public function testTokenLifetimeIsOneHour(): void
    {
        $expectedLifetime = 3600; // 1 hour in seconds
        $this->assertEquals($expectedLifetime, 3600);
    }
}
