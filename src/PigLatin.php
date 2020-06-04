<?php

class PigLatin
{
    protected $diagraphs = [
        'bl', 'br', 'ch', 'cl', 'cr', 'dr', 'fl', 'fr', 'gl', 'gr', 'pl', 'pr', 'sc',
        'sh', 'sk', 'sl', 'sm', 'sn', 'sp', 'st', 'sw', 'th', 'tr', 'tw', 'wh', 'wr'
    ];

    protected $triagraphs = [
        'sch', 'scr', 'shr', 'sph', 'spl', 'spr', 'squ', 'str', 'thr'
    ];

    protected $vowels = ['a', 'i', 'u', 'e', 'o'];

    public function convert($word)
    {
        $firstLetter = substr($word, 0, 1);
        $firstTwoLetters = substr($word, 0, 2);
        $firstThreeLetters = substr($word, 0, 3);

        if (in_array($firstThreeLetters, $this->triagraphs))
        {
            return substr($word, 3) . $firstThreeLetters . 'ay';
        }

        if (in_array($firstTwoLetters, $this->diagraphs))
        {
            return substr($word, 2) . $firstTwoLetters . 'ay';
        }

        if (in_array($firstLetter, $this->vowels))
        {
            return $word . 'ay';
        }

        return substr($word, 1) . $firstLetter . 'ay';
    }
}
