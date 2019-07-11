<?php

namespace BrainGames\Games;

use function BrainGames\Games\play;

const PROGRESSION_LENGTH = 10;

function runProgressionGame()
{
    $instruction = 'What number is missing in the progression?';

    $makeQuestion = function () {
        $startOfProgression = rand(1, 10);
        $delta = rand(1, 10);
        $progression = makeProgression($startOfProgression, $delta);

        $missingItemIndex = array_rand($progression);
        $missingItem = $progression[$missingItemIndex];
        $progression[$missingItemIndex] = '..';

        $question = implode(' ', $progression);

        return [
            'correctAnswer' => $missingItem,
            'question' => $question
        ];
    };

    play($makeQuestion, $instruction);
}

function makeProgression($startOfProgression, $delta)
{
    $progression = [];

    for ($i = 0; $i < PROGRESSION_LENGTH; $i += 1) {
        $progression[] = $startOfProgression + $delta * $i;
    }

    return $progression;
}
