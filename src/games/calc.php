<?php

namespace BrainGames\Games;

use function BrainGames\Games\play;

const OPERATIONS = ['+', '-', '*'];
const CALC_INSTRUCTION = 'What is the result of the expression?';

function runCalcGame()
{
    $makeQuestion = function () {
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

        return [$correctAnswer, $question];
    };

    play($makeQuestion, CALC_INSTRUCTION);
}
