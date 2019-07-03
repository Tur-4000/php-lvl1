<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\runEvenGame;
use function BrainGames\Games\runCalcGame;

function greeting()
{
    $playerName = prompt('May I have your name?');
    line("Hello, ${playerName}!" . PHP_EOL);
    return $playerName;
}

function run($game = null)
{
    line("\nWelcome to the Brain Games!");

    if ($game === 'even-game') {
        runEvenGame();
    } elseif ($game === 'calc-game') {
        runCalcGame();
    } else {
        greeting();
    }
}
