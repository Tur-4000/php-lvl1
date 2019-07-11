<?php

namespace BrainGames\Games;

use function BrainGames\Games\play;

const GCD_INSTRUCTION = 'Find the greatest common divisor of given numbers.';

function runGcdGame()
{
    $makeQuestion = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $question = "$num1 $num2";

        $correctAnswer = getGcd($num1, $num2);

        return [$correctAnswer, $question];
    };

    play($makeQuestion, GCD_INSTRUCTION);
}

function getGcd($a, $b)
{
    return ($b > 0) ? getGcd($b, $a % $b) : $a;
}
