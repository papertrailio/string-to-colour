<?php namespace Tests\Unit\Types;

use Papertrailio\StringToColour\Types\Hex;
use PHPUnit_Framework_TestCase;

class HexTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_hsl_array()
    {
        $hsl = (new Hex(76, 63))->generate('test');

        $this->assertEquals('E8E459', $hsl);
    }
}

