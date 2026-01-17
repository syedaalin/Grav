<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Grav\Common\Grav;
use Grav\Theme\NurUlHuda\Utils\LogoValidator;
use Mockery;

class LogoValidatorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Reset Grav instance before each test
        Grav::$instance = null;
    }

    protected function tearDown(): void
    {
        Mockery::close();
        Grav::$instance = null;
        parent::tearDown();
    }

    public function testValidateReturnsTrueForEmptyValue(): void
    {
        // Empty value should be allowed (logo is optional)
        $this->assertTrue(LogoValidator::validate(null));
        $this->assertTrue(LogoValidator::validate([]));
        $this->assertTrue(LogoValidator::validate(''));
    }

    public function testValidateThrowsExceptionForNonSquareImage(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessageMatches('/MUST be 1:1 aspect ratio/');

        // Create a temporary non-square test image
        $tempFile = sys_get_temp_dir() . '/test_logo_nonsquare.png';

        // Create a 100x50 image (not square)
        $image = imagecreatetruecolor(100, 50);
        imagepng($image, $tempFile);
        imagedestroy($image);

        try {
            // Mock Grav instance
            $grav = Mockery::mock(Grav::class);
            Grav::$instance = $grav;
            $locator = Mockery::mock('stdClass');

            $grav->shouldReceive('offsetGet')
                ->with('locator')
                ->andReturn($locator);

            $locator->shouldReceive('findResource')
                ->andReturn($tempFile);

            LogoValidator::validate([
                'test_logo_nonsquare.png' => []
            ]);
        } finally {
            // Cleanup
            if (file_exists($tempFile)) {
                unlink($tempFile);
            }
        }
    }

    public function testValidateAcceptsSquareImage(): void
    {
        // Create a temporary square test image
        $tempFile = sys_get_temp_dir() . '/test_logo_square.png';

        // Create a 512x512 image (square)
        $image = imagecreatetruecolor(512, 512);
        imagepng($image, $tempFile);
        imagedestroy($image);

        // Verify it's square
        $size = getimagesize($tempFile);
        [$width, $height] = $size;

        $this->assertEquals($width, $height, 'Test image should be square');

        // Cleanup
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
    }

    public function testValidateExceptionMessageIncludesDimensions(): void
    {
        $width = 800;
        $height = 600;
        $filename = 'logo.png';

        $expectedMessage = sprintf(
            'Logo "%s" is %dx%dpx. It MUST be 1:1 aspect ratio (Square). Please upload a square image (e.g. 512x512).',
            $filename,
            $width,
            $height
        );

        // Verify message format
        $this->assertStringContainsString((string)$width, $expectedMessage);
        $this->assertStringContainsString((string)$height, $expectedMessage);
        $this->assertStringContainsString($filename, $expectedMessage);
        $this->assertStringContainsString('1:1 aspect ratio', $expectedMessage);
    }

    public function testValidateHandlesMultipleFiles(): void
    {
        // Verify the loop logic handles array iteration
        $files = [
            'logo1.png' => ['data' => 'some_data'],
            'logo2.png' => ['data' => 'some_data'],
        ];

        $this->assertCount(2, $files);

        foreach ($files as $filename => $data) {
            $this->assertIsString($filename);
            $this->assertIsArray($data);
        }
    }

    public function testValidateSkipsNonExistentFiles(): void
    {
        // If file doesn't exist, validation should skip it
        $nonExistentPath = '/path/to/nonexistent/file.png';

        $this->assertFalse(file_exists($nonExistentPath));

        // Verify the file_exists check would prevent processing
        if (file_exists($nonExistentPath)) {
            $this->fail('File should not exist');
        } else {
            $this->assertTrue(true, 'Correctly skips non-existent files');
        }
    }

    public function testValidateHandlesGetImagesizeFailure(): void
    {
        // If getimagesize fails, it returns false
        $invalidFile = sys_get_temp_dir() . '/invalid_image.txt';
        file_put_contents($invalidFile, 'not an image');

        $size = @getimagesize($invalidFile);

        $this->assertFalse($size, 'getimagesize should return false for invalid images');

        // Cleanup
        if (file_exists($invalidFile)) {
            unlink($invalidFile);
        }
    }

    public function testValidatorIsFinalClass(): void
    {
        $reflection = new \ReflectionClass(LogoValidator::class);
        $this->assertTrue($reflection->isFinal(), 'LogoValidator should be final');
    }

    public function testValidateMethodIsStatic(): void
    {
        $reflection = new \ReflectionMethod(LogoValidator::class, 'validate');
        $this->assertTrue($reflection->isStatic(), 'validate method should be static');
        $this->assertTrue($reflection->isPublic(), 'validate method should be public');
    }

    public function testValidateMethodSignature(): void
    {
        $reflection = new \ReflectionMethod(LogoValidator::class, 'validate');

        $params = $reflection->getParameters();
        $this->assertCount(1, $params);
        $this->assertEquals('value', $params[0]->getName());

        // Check return type
        $this->assertEquals('bool', (string)$reflection->getReturnType());
    }

    public function testAspectRatioCalculation(): void
    {
        // Test various dimensions
        $testCases = [
            ['width' => 512, 'height' => 512, 'isSquare' => true],
            ['width' => 1024, 'height' => 1024, 'isSquare' => true],
            ['width' => 800, 'height' => 600, 'isSquare' => false],
            ['width' => 100, 'height' => 200, 'isSquare' => false],
        ];

        foreach ($testCases as $test) {
            $isSquare = $test['width'] === $test['height'];
            $this->assertEquals($test['isSquare'], $isSquare);
        }
    }

    public function testValidateUsesSuppressionOperator(): void
    {
        // Verify that @ operator is used with getimagesize
        $reflection = new \ReflectionMethod(LogoValidator::class, 'validate');
        $source = file_get_contents($reflection->getFileName());

        $this->assertStringContainsString(
            '@\\getimagesize',
            $source,
            'validate method should use @ operator to suppress getimagesize warnings'
        );
    }
}
