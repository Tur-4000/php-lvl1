<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\play;

const INSTRUCTION = 'Find the greatest common divisor of given numbers.';

function runGcdGame()
{
    $makeGameData = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $question = "$num1 $num2";

        $correctAnswer = getGcd($num1, $num2);

        return [$correctAnswer, $question];
    };

    play($makeGameData, INSTRUCTION);
}

function getGcd($a, $b)
{
    return ($b > 0) ? getGcd($b, $a % $b) : $a;
}
