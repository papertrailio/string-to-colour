<?php namespace Papertrailio\StringToColour;

class Generator
{
    /**
     * Convert a string to an integer hash
     *
     * @param $text
     * @return int
     */
    public function getHash($text)
    {
        $hash = 0;

        for ($i = 0; $i < strlen($text); $i++) {
            $hash = ord(substr($text, $i, 1)) + (($hash << 5) - $hash);

            $hash = $hash & 0xffffffff;
        }

        return $hash;
    }
}