<?php

namespace Grav\Theme\NurUlHuda\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Grav\Theme\NurUlHuda\Utils\FontHelper;
use Grav\Common\Grav;
use Grav\Common\Config;
use Mockery;

class FontHelperTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $grav = Grav::instance();
        $config = Mockery::mock(Config::class);
        $grav['config'] = $config;

        $config->shouldReceive('get')
            ->with('themes.nur-ul-huda')
            ->andReturn([
                'custom_fonts' => [
                    ['name' => 'CustomFont.woff2']
                ]
            ]);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        Grav::$instance = null;
        parent::tearDown();
    }

    public function testGetFontOptionsReturnsDefaultFonts()
    {
        $options = FontHelper::getFontOptions();

        $this->assertIsArray($options);
        $this->assertArrayHasKey("sans-serif", $options);
        $this->assertArrayHasKey("serif", $options);
        $this->assertArrayHasKey("'CustomFont', sans-serif", $options);
    }
}
