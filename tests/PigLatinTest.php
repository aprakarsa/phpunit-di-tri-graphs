<?php

// require_once __DIR__ . '/../src/PigLatin';

use PHPUnit\Framework\TestCase;

class PigLatinTest extends TestCase
{
    /** @test */
    function convertSingleStartingConsonantWordToPigLatin()
    {
        $word = 'test';
        $expectedResult = 'esttay';

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals($expectedResult, $result, "this one doesn't matched.");
    }

    /** @test */
    function convertDigraphWordToPigLatin()
    {
        $word = 'treehouse';
        $expectedResult = 'eehousetray';

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals($expectedResult, $result, "this digraph doesn't matched.");
    }

    /** @test */
    function convertTrigraphWordToPigLatin()
    {
        $word = 'streak';
        $expectedResult = 'eakstray';

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals($expectedResult, $result, "this trigraph doesn't matched.");
    }

    /** @test */
    function convertStartingVowelWordToPigLatin()
    {
        $word = 'unit';
        $expectedResult = 'unitay';

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals($expectedResult, $result, "this one doesn't matched.");
    }
}
