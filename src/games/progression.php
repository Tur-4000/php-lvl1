<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

const PROGRESSION_LEN = 9;

function runProgressionGame()
{
    $question = function () {
        $startOfProgression = rand(1, 10);
        $delta = rand(1, 10);
        $progression = genProgression($startOfProgression, $delta);
        $missingItemOffset = rand(0, PROGRESSION_LEN);
        $missingItem = $progression[$missingItemOffset];
        $progression[$missingItemOffset] = '..';
        $question = implode(' ', $progression);

        line("Question: $question");

        return $missingItem;
    };

    play($question, 'progression');
}

function genProgression($firstNum, $delta)
{
    $progression = [$firstNum];

    for ($i = 1; $i < 10; $i += 1) {
        $progression[] += $progression[$i - 1] + $delta;
    }

    return $progression;
}
