<?php namespace Papertrailio\StringToColour\Types;

use Papertrailio\StringToColour\Contracts\Colour;
use Papertrailio\StringToColour\Generator;
use Scriptura\Color\Types\HSL;

class Hex implements Colour
{
    /**
     * @var int
     */
    protected $saturation;

    /**
     * @var int
     */
    protected $lightness;

    /**
     * @param $saturation
     * @param $lightness
     */
    public function __construct($saturation = 76, $lightness = 63)
    {
        $this->saturation = $saturation;
        $this->lightness = $lightness;
    }

    /**
     * @return string
     */
    public function generate($string)
    {
        $hash = (new Generator)->getHash($string);

        $hsl = new HSL($hash % 360, $this->saturation, $this->lightness);

        return $hsl->toHEX()->code();
    }
}