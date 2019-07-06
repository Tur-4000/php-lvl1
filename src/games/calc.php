<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;
use function BrainGames\Games\play;

const OPERATIONS = ['+', '-', '*'];
const LEN_OPERATIONS = 2;

function runCalcGame()
{
    welcome();
    line('What is the result of the expression?' . PHP_EOL);
    $playerName = greeting();

    $question = function () {
        $num1 = rand(0, 30);
        $num2 = rand(0, 30);
        $operation = OPERATIONS[rand(0, LEN_OPERATIONS)];

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

    play($playerName, $question);
}
