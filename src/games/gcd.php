<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

function runGcdGame()
{
    $instruction = 'Find the greatest common divisor of given numbers.';

    $question = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $question = "$num1 $num2";

        line("Question: $question");

        return getGcd($num1, $num2);
    };

    play($question, $instruction);
}

function getGcd($a, $b)
{
    return ($b > 0) ? getGcd($b, $a % $b) : $a;
}
