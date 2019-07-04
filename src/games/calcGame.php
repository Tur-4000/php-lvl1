<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;
use function BrainGames\Games\game;

function runCalcGame()
{
    welcome();
    line('What is the result of the expression?' . PHP_EOL);
    $playerName = greeting();
    $question = function () {
        $operations = ['+', '-', '*'];
        $num1 = rand(0, 30);
        $num2 = rand(0, 30);
        $operation = $operations[rand(0, 2)];

        $question = "${num1} ${operation} ${num2}";

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

        line("Question: ${question}");

        return $correctAnswer;
    };

    game($playerName, $question);
}
