<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Cli\greeting;
use function BrainGames\Games\game;

function runGcdGame()
{
    line('What is the result of the expression?' . PHP_EOL);
    $playerName = greeting();
    $question = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $question = "${num1} ${num2}";

        line("Question: ${question}");

        return gcd($num1, $num2);
    };

    game($playerName, $question);
}

function gcd($num1, $num2)
{
    while ($num1 !== 0 && $num2 !== 0) {
        if ($num1 > $num2) {
            $num1 = $num1 % $num2;
        } else {
            $num2 = $num2 % $num1;
        }
    }
    return $num1 + $num2;
}
