<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

const PROGRESSION_LENGTH = 10;

function runProgressionGame()
{
    $question = function () {
        $progression = genProgression();

        $missingItemIndex = array_rand($progression);
        $missingItem = $progression[$missingItemIndex];
        $progression[$missingItemIndex] = '..';

        $question = implode(' ', $progression);

        line("Question: $question");

        return $missingItem;
    };

    play($question, 'progression');
}

function genProgression()
{
    $progression = [];
    $delta = rand(1, 10);

    for ($i = 0; $i < PROGRESSION_LENGTH; $i += 1) {
        if ($i === 0) {
            $progression[] = rand(1, 10);
        } else {
            $progression[] = $progression[$i - 1] + $delta;
        }
    }

    return $progression;
}
