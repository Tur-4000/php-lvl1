<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;
use function BrainGames\Games\game;

function runProgressionGame()
{
    welcome();
    line('What number is missing in the progression?' . PHP_EOL);
    $playerName = greeting();

    $question = function () {
        $startOfProgression = rand(1, 10);
        $delta = rand(1, 10);
        $progression = genProgression($startOfProgression, $delta);
        $missingNumOffset = rand(0, 9);
        $missingNum = $progression[$missingNumOffset];
        $progression[$missingNumOffset] = '..';
        $question = implode(' ', $progression);

        line("Question: ${question}");

        return $missingNum;
    };

    game($playerName, $question);
}

function genProgression($firstNum, $delta)
{
    $progression = [$firstNum];

    for ($i = 1; $i < 10; $i += 1) {
        $progression[] += $progression[$i - 1] + $delta;
    }

    return $progression;
}
