<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\runEvenGame;

function greeting()
{
    $playerName = prompt('May I have your name?');
    line("Hello, ${playerName}!" . PHP_EOL);
    return $playerName;
}

function run($game = false)
{
    line("\nWelcome to the Brain Games!");

    if ($game === 'even-game') {
        line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);
        $playerName = greeting();
        runEvenGame($playerName);
    } else {
        greeting();
    }
}
