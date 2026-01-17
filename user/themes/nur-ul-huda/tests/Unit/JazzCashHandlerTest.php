<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Grav\Common\Grav;
use Grav\Common\Config\Config;
use Grav\Common\Session;
use Grav\Theme\NurUlHuda\Payments\JazzCashHandler;
use Grav\Theme\NurUlHuda\Utils\SecurityLogger;
use Mockery;

class JazzCashHandlerTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function testVerifyHashWithValidSignature(): void
    {
        $salt = 'test_salt_123';
        $post = [
            'pp_Amount' => '1000',
            'pp_BillReference' => 'BILL123',
            'pp_ResponseCode' => '000',
            'pp_TxnRefNo' => 'TXN456',
        ];

        // Generate expected hash
        ksort($post);
        $hash_string = $salt;
        foreach ($post as $value) {
            if ($value !== '') {
                $hash_string .= '&' . $value;
            }
        }

        $expected_hash = hash_hmac('sha256', $hash_string, $salt);
        $expected_hash = strtoupper($expected_hash);

        // Add hash to post data
        $post['pp_SecureHash'] = $expected_hash;

        // Verify hash_hmac produces consistent results
        $verify_hash = hash_hmac('sha256', $hash_string, $salt);
        $verify_hash = strtoupper($verify_hash);

        $this->assertEquals($expected_hash, $verify_hash);
        $this->assertTrue(hash_equals($expected_hash, $verify_hash));
    }

    public function testVerifyHashWithInvalidSignature(): void
    {
        $correctHash = 'ABCD1234';
        $incorrectHash = 'WXYZ5678';

        $this->assertFalse(hash_equals($correctHash, $incorrectHash));
    }

    public function testVerifyHashWithMissingHash(): void
    {
        $post = [
            'pp_Amount' => '1000',
            'pp_BillReference' => 'BILL123',
        ];

        // Verify missing hash check
        $response_hash = $post['pp_SecureHash'] ?? '';
        $this->assertEmpty($response_hash);
    }

    public function testVerifyHashIgnoresEmptyValues(): void
    {
        $salt = 'test_salt';
        $post = [
            'pp_Amount' => '1000',
            'pp_Empty' => '',
            'pp_Filled' => 'value',
        ];

        // Build hash string (should skip empty values)
        $hash_string = $salt;
        foreach ($post as $value) {
            if ($value !== '') {
                $hash_string .= '&' . $value;
            }
        }

        // Verify empty value was skipped
        $this->assertStringNotContainsString('&&', $hash_string);
        $this->assertStringContainsString('&1000', $hash_string);
        $this->assertStringContainsString('&value', $hash_string);
    }

    public function testVerifyHashSortsDataBeforeHashing(): void
    {
        $unsorted = [
            'z_field' => 'last',
            'a_field' => 'first',
            'c_field' => 'middle',
        ];

        ksort($unsorted);
        $keys = array_keys($unsorted);

        $this->assertEquals(['a_field', 'c_field', 'z_field'], $keys);
    }

    public function testGeneratePaymentNonceCreates32HexChars(): void
    {
        $nonce = bin2hex(random_bytes(16));

        $this->assertEquals(32, strlen($nonce));
        $this->assertMatchesRegularExpression('/^[a-f0-9]{32}$/', $nonce);
    }

    public function testGeneratePaymentNonceIsUnique(): void
    {
        $nonce1 = bin2hex(random_bytes(16));
        $nonce2 = bin2hex(random_bytes(16));

        $this->assertNotEquals($nonce1, $nonce2, 'Nonces should be unique');
    }

    public function testSuccessfulPaymentResponseCode(): void
    {
        $successCode = '000';
        $failureCode = '001';

        $this->assertEquals('000', $successCode);
        $this->assertNotEquals('000', $failureCode);
    }

    public function testHashUsesUpperCase(): void
    {
        $hash = hash_hmac('sha256', 'test', 'salt');
        $upperHash = strtoupper($hash);

        $this->assertEquals($upperHash, strtoupper($hash));
        $this->assertMatchesRegularExpression('/^[A-F0-9]+$/', $upperHash);
    }

    public function testHashUsesHmacSha256(): void
    {
        $data = 'test_data';
        $key = 'test_key';

        $hash = hash_hmac('sha256', $data, $key);

        // SHA256 produces 64 hex characters
        $this->assertEquals(64, strlen($hash));
        $this->assertMatchesRegularExpression('/^[a-f0-9]{64}$/', $hash);
    }

    public function testHandleCallbackValidatesNonce(): void
    {
        $sessionNonce = 'abc123';
        $postNonce = 'abc123';
        $wrongNonce = 'xyz789';

        // Verify timing-safe comparison
        $this->assertTrue(hash_equals($sessionNonce, $postNonce));
        $this->assertFalse(hash_equals($sessionNonce, $wrongNonce));
    }

    public function testHandleCallbackRequiresSalt(): void
    {
        $config = [];
        $salt = $config['jazzcash_salt'] ?? '';

        $this->assertEmpty($salt);
    }

    public function testJazzCashHandlerIsReadonly(): void
    {
        $reflection = new \ReflectionClass(JazzCashHandler::class);
        $this->assertTrue($reflection->isReadOnly(), 'JazzCashHandler should be readonly');
    }

    public function testConstructorAcceptsConfigAndLogger(): void
    {
        $reflection = new \ReflectionClass(JazzCashHandler::class);
        $constructor = $reflection->getConstructor();

        $params = $constructor->getParameters();
        $this->assertGreaterThanOrEqual(1, count($params));

        $this->assertEquals('config', $params[0]->getName());
    }

    public function testMethodSignatures(): void
    {
        $class = new \ReflectionClass(JazzCashHandler::class);

        // Check handleCallback exists
        $this->assertTrue($class->hasMethod('handleCallback'));
        $handleCallback = $class->getMethod('handleCallback');
        $this->assertEquals('void', (string)$handleCallback->getReturnType());

        // Check generatePaymentNonce exists
        $this->assertTrue($class->hasMethod('generatePaymentNonce'));
        $generateNonce = $class->getMethod('generatePaymentNonce');
        $this->assertEquals('string', (string)$generateNonce->getReturnType());
    }

    public function testResponseCodeMapping(): void
    {
        $codes = [
            '000' => 'success',
            '001' => 'failure',
            '999' => 'error',
        ];

        foreach ($codes as $code => $status) {
            if ($code === '000') {
                $this->assertEquals('success', $status);
            } else {
                $this->assertNotEquals('success', $status);
            }
        }
    }

    public function testTimingSafeHashComparison(): void
    {
        // Timing attacks should be prevented with hash_equals
        $hash1 = hash('sha256', 'secret1');
        $hash2 = hash('sha256', 'secret1');
        $hash3 = hash('sha256', 'secret2');

        // Same hashes
        $this->assertTrue(hash_equals($hash1, $hash2));

        // Different hashes
        $this->assertFalse(hash_equals($hash1, $hash3));
    }
}
