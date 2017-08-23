<?php namespace Papertrailio\StringToColour;

use Papertrailio\StringToColour\Contracts\Colour;

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
    public function __construct($saturation, $lightness)
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
            'h' => $hash % 360,
            's' => $this->saturation,
            'l' => $this->lightness,
        ];
    }
}