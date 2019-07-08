<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

const OPERATIONS = ['+', '-', '*'];

function runCalcGame()
{
    $question = function () {
        $num1 = rand(0, 30);
        $num2 = rand(0, 30);
        $operation = OPERATIONS[array_rand(OPERATIONS)];

        $question = "$num1 $operation $num2";

        switch ($operation) {
            case '+':
                $correctAnswer = $num1 + $num2;
                break;
            case '-':
                $correctAnswer = $num1 - $num2;
                break;
            case '*':
                $correctAnswer = $num1 * $num2;
                break;
        }

        line("Question: $question");

        return $correctAnswer;
    };

    play($question, 'calc');
}
