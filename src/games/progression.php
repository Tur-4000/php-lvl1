<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Game\play;

const PROGRESSION_LENGTH = 10;
const INSTRUCTION = 'What number is missing in the progression?';

function runProgressionGame()
{
    $makeGameData = function () {
        $startOfProgression = rand(1, 10);
        $delta = rand(1, 10);
        $progression = makeProgression($startOfProgression, $delta, PROGRESSION_LENGTH);

        $missingItemIndex = array_rand($progression);
        $missingItem = $progression[$missingItemIndex];
        $progression[$missingItemIndex] = '..';

        $question = implode(' ', $progression);

        return [$missingItem, $question];
    };

    play($makeGameData, INSTRUCTION);
}

function makeProgression($startOfProgression, $delta, $legth)
{
    $progression = [];

    for ($i = 0; $i < $legth; $i += 1) {
        $progression[] = $startOfProgression + $delta * $i;
    }

    return $progression;
}
