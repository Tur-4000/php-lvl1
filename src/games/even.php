<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;
use function BrainGames\Games\makeQuestion;

function runEvenGame()
{
    $instruction = 'Answer "yes" if number even otherwise answer "no".';

    $makeQuestion = function () {
        $question = rand(0, 99);

        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return makeQuestion($correctAnswer, $question);
        // return [
        //     'correctAnswer' => $correctAnswer,
        //     'question' => $question
        // ];
    };

    play($makeQuestion, $instruction);
}

function isEven($num)
{
    return $num % 2 === 0;
}
