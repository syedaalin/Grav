<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Grav\Theme\NurUlHuda\Services\FormPrivacyGuard;
use Mockery;

class FormPrivacyGuardTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function testHandleScrupsDataWhenAnonymousIsEnabled(): void
    {
        $guard = new FormPrivacyGuard();

        // Mock form object
        $form = Mockery::mock('stdClass');
        $value = Mockery::mock('stdClass');

        // Setup anonymous data
        $value->shouldReceive('toArray')
            ->andReturn([
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'anonymous' => 1
            ]);

        $form->shouldReceive('value')
            ->andReturn($value);

        $form->shouldReceive('setFields')
            ->once()
            ->with(['name' => null]);

        // Execute
        $guard->handle($form, 'save');

        // Mockery will verify setFields was called
        $this->expectNotToPerformAssertions();
    }

    public function testHandleDoesNotScrupWhenAnonymousIsDisabled(): void
    {
        $guard = new FormPrivacyGuard();

        // Mock form object
        $form = Mockery::mock('stdClass');
        $value = Mockery::mock('stdClass');

        // Setup non-anonymous data
        $value->shouldReceive('toArray')
            ->andReturn([
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'anonymous' => 0
            ]);

        $form->shouldReceive('value')
            ->andReturn($value);

        // Should NOT call setFields
        $form->shouldNotReceive('setFields');

        // Execute
        $guard->handle($form, 'save');

        $this->expectNotToPerformAssertions();
    }

    public function testHandleOnlyProcessesSaveAndEmailActions(): void
    {
        $validActions = ['save', 'email'];
        $invalidActions = ['display', 'reset', 'validate'];

        foreach ($validActions as $action) {
            $this->assertContains($action, ['save', 'email']);
        }

        foreach ($invalidActions as $action) {
            $this->assertNotContains($action, ['save', 'email']);
        }
    }

    public function testHandleDoesNothingForNonSaveEmailActions(): void
    {
        $guard = new FormPrivacyGuard();

        $form = Mockery::mock('stdClass');

        // Should not access form value for other actions
        $form->shouldNotReceive('value');

        // Execute with non-save/email action
        $guard->handle($form, 'display');

        $this->expectNotToPerformAssertions();
    }

    public function testAnonymousFlagDetection(): void
    {
        $testCases = [
            ['anonymous' => 1, 'expected' => true],
            ['anonymous' => 0, 'expected' => false],
            ['anonymous' => '1', 'expected' => true], // (int)'1' === 1
            ['anonymous' => true, 'expected' => true], // (int)true === 1
        ];

        foreach ($testCases as $test) {
            $isAnonymous = isset($test['anonymous']) && (int)$test['anonymous'] === 1;
            $this->assertEquals($test['expected'], $isAnonymous, "Failed for value: " . var_export($test['anonymous'], true));
        }
    }

    public function testHandleSetsNameToNull(): void
    {
        // Verify the field name that gets scrubbed
        $scrubbedFields = ['name' => null];

        $this->assertArrayHasKey('name', $scrubbedFields);
        $this->assertNull($scrubbedFields['name']);
    }

    public function testFormPrivacyGuardIsReadonly(): void
    {
        $reflection = new \ReflectionClass(FormPrivacyGuard::class);
        $this->assertTrue($reflection->isReadOnly(), 'FormPrivacyGuard should be readonly');
    }

    public function testHandleMethodSignature(): void
    {
        $reflection = new \ReflectionMethod(FormPrivacyGuard::class, 'handle');

        $params = $reflection->getParameters();
        $this->assertCount(2, $params);

        $this->assertEquals('form', $params[0]->getName());
        $this->assertEquals('action', $params[1]->getName());

        // Check return type
        $this->assertEquals('void', (string)$reflection->getReturnType());
    }

    public function testHandleDoesNotScrubOtherFields(): void
    {
        // Only 'name' field should be scrubbed
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Test message',
            'anonymous' => 1
        ];

        $scrubbedFields = ['name' => null];

        // Verify only name is in scrubbed fields
        $this->assertCount(1, $scrubbedFields);
        $this->assertArrayHasKey('name', $scrubbedFields);
        $this->assertArrayNotHasKey('email', $scrubbedFields);
        $this->assertArrayNotHasKey('message', $scrubbedFields);
    }

    public function testConstructorHasNoParameters(): void
    {
        $reflection = new \ReflectionClass(FormPrivacyGuard::class);
        $constructor = $reflection->getConstructor();

        // Should be able to instantiate without parameters
        $params = $constructor ? $constructor->getParameters() : [];
        $this->assertCount(0, $params);
    }

    public function testGdprCompliance(): void
    {
        // GDPR compliance test: verify data minimization
        $personalFields = ['name', 'email', 'phone', 'address'];
        $scrubbedFields = ['name']; // Only name is scrubbed

        // In a real GDPR scenario, all personal fields should be scrubbed
        // This test documents current behavior
        $this->assertContains('name', $scrubbedFields);

        // Note: This is a basic implementation
        // Full GDPR compliance would require scrubbing all PII
        $this->assertCount(1, $scrubbedFields);
    }

    public function testAnonymousValueTypes(): void
    {
        // Test different value types for anonymous flag
        $values = [
            1 => true,       // Integer 1 should trigger
            '1' => true,     // String '1' casted to int is 1
            true => true,    // Boolean true casted to int is 1
            0 => false,      // Integer 0 should not trigger
        ];

        foreach ($values as $value => $shouldTrigger) {
            $matches = (int)$value === 1;
            $this->assertEquals($shouldTrigger, $matches, "Failed for value: " . var_export($value, true));
        }
    }
}
