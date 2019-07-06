<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;
use function BrainGames\Games\play;

function runEvenGame()
{
    welcome();
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);

    $playerName = greeting();

    $question = function () {
        $question = rand(0, 99);

        line("Question: $question");

        return isEven($question);
    };

    play($playerName, $question);
}

function isEven($num)
{
    return ($num % 2 === 0) ? 'yes' : 'no';
}
