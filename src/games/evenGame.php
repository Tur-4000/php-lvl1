<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\greeting;
use function BrainGames\Games\game;

function runEvenGame()
{
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);

    $playerName = greeting();

    $question = function () {
        $num = rand(0, 99);
        $question = "${num}";

        line("Question: ${question}");

        return ($num % 2 === 0) ? 'yes' : 'no';
    };

    game($playerName, $question);
}
