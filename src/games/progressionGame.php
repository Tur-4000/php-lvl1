<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;
use function BrainGames\Games\game;

function runProgressionGame()
{
    welcome();
    line('What number is missing in the progression?' . PHP_EOL);
    $playerName = greeting();

    $question = function () {
        $num = rand(1, 10);

        $question = "${num}";

        line("Question: ${question}");

        return $num;
    };

    game($playerName, $question);
}
