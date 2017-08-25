<?php namespace Tests\Unit\Types;

use Papertrailio\StringToColour\Types\HSL;
use PHPUnit_Framework_TestCase;

class HSLTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_hsl_array()
    {
        $hsl = (new HSL(76, 63))->generate('text');

        $this->assertCount(3, $hsl);
        $this->assertEquals(213, $hsl['hue']);
        $this->assertEquals(76, $hsl['saturation']);
        $this->assertEquals(63, $hsl['lightness']);
    }
}