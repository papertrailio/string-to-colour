<?php namespace Papertrailio\StringToColour\Types;

use Papertrailio\StringToColour\Contracts\Colour;
use Papertrailio\StringToColour\Generator;

class HSL implements Colour
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
     * @return array
     */
    public function generate($string)
    {
        $hash = (new Generator)->getHash($string);

        return [
            'hue' => $hash % 360,
            'saturation' => $this->saturation,
            'lightness' => $this->lightness,
        ];
    }
}