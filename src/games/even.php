<?php

namespace BrainGames\Games;

use function BrainGames\Games\play;

const EVEN_INSTRUCTION = 'Answer "yes" if number even otherwise answer "no".';

function runEvenGame()
{
    $makeGameData = function () {
        $question = rand(0, 99);

        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    play($makeGameData, EVEN_INSTRUCTION);
}

function isEven($num)
{
    return $num % 2 === 0;
}
