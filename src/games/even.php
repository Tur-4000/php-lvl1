<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

function runEvenGame()
{
    $question = function () {
        $question = rand(0, 99);

        line("Question: $question");

        return isEven($question) ? 'yes' : 'no';
    };

    play($question, 'even');
}

function isEven($num)
{
    return $num % 2 === 0;
}
