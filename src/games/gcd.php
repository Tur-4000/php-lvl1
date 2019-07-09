<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

function runGcdGame()
{
    $instruction = 'Find the greatest common divisor of given numbers.';

    $makeQuestion = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $question = "$num1 $num2";

        $correctAnswer = getGcd($num1, $num2);

        return [
            'correctAnswer' => $correctAnswer,
            'question' => $question
        ];
    };

    play($makeQuestion, $instruction);
}

function getGcd($a, $b)
{
    return ($b > 0) ? getGcd($b, $a % $b) : $a;
}
