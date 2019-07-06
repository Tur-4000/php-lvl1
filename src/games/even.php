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

        line("Question: ${question}");

        return ($question % 2 === 0) ? 'yes' : 'no';
    };

    play($playerName, $question);
}
