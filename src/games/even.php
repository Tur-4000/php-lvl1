<?php

namespace BrainGames\Games\Even;

use function BrainGames\Game\play;

const INSTRUCTION = 'Answer "yes" if number even otherwise answer "no".';

function runEvenGame()
{
    $makeGameData = function () {
        $question = rand(0, 99);

        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    play($makeGameData, INSTRUCTION);
}

function isEven($num)
{
    return $num % 2 === 0;
}
