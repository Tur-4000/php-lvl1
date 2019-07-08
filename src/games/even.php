<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

function runEvenGame()
{
    $instruction = 'Answer "yes" if number even otherwise answer "no".';

    $question = function () {
        $question = rand(0, 99);

        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [
            'correctAnswer' => $correctAnswer,
            'question' => $question
        ];
    };

    play($question, $instruction);
}

function isEven($num)
{
    return $num % 2 === 0;
}
