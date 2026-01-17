<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Grav\Theme\NurUlHuda\Utils\SecurityHelper;

/**
 * Test suite for SecurityHelper
 * 
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class SecurityHelperTest extends TestCase
{
    public function testApplyHeadersInProductionMode(): void
    {
        $config = ['production-mode' => true];

        // We can't easily test header() calls in PHPUnit without output buffering tricks,
        // but we can verify the method executes without errors
        $this->expectNotToPerformAssertions();

        SecurityHelper::applyHeaders($config);
    }

    public function testApplyHeadersSkipsWhenNotInProductionMode(): void
    {
        $config = ['production-mode' => false];

        // Should return early without setting headers
        $this->expectNotToPerformAssertions();

        SecurityHelper::applyHeaders($config);
    }

    public function testApplyHeadersWithMissingConfig(): void
    {
        $config = [];

        // Should default to production mode (true)
        $this->expectNotToPerformAssertions();

        SecurityHelper::applyHeaders($config);
    }

    public function testApplyHeadersWithNullConfig(): void
    {
        $config = null;

        // Should handle null config gracefully
        $this->expectNotToPerformAssertions();

        SecurityHelper::applyHeaders($config);
    }

    /**
     * Test that SecurityHelper is marked as readonly and final
     */
    public function testSecurityHelperIsReadonlyAndFinal(): void
    {
        $reflection = new \ReflectionClass(SecurityHelper::class);

        $this->assertTrue($reflection->isFinal(), 'SecurityHelper should be final');
        $this->assertTrue($reflection->isReadOnly(), 'SecurityHelper should be readonly');
    }

    /**
     * Test that applyHeaders method exists and is static
     */
    public function testApplyHeadersMethodIsStatic(): void
    {
        $this->assertTrue(
            method_exists(SecurityHelper::class, 'applyHeaders'),
            'applyHeaders method should exist'
        );

        $reflection = new \ReflectionMethod(SecurityHelper::class, 'applyHeaders');
        $this->assertTrue($reflection->isStatic(), 'applyHeaders should be static');
        $this->assertTrue($reflection->isPublic(), 'applyHeaders should be public');
    }

    /**
     * Test method signature
     */
    public function testApplyHeadersSignature(): void
    {
        $reflection = new \ReflectionMethod(SecurityHelper::class, 'applyHeaders');

        $parameters = $reflection->getParameters();
        $this->assertCount(1, $parameters, 'applyHeaders should accept exactly one parameter');

        $param = $parameters[0];
        $this->assertEquals('config', $param->getName());

        // Verify return type is void
        $this->assertEquals('void', (string)$reflection->getReturnType());
    }
}
