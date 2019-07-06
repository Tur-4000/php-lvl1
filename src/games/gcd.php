<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;
use function BrainGames\Games\game;
use function BrainGames\Utils\gcd;

function runGcdGame()
{
    welcome();
    line('Find the greatest common divisor of given numbers.' . PHP_EOL);
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
