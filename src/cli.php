<?php

namespace BrainGames\Cli;

use function \cli\line;
use function BrainGames\Games\greeting;
use function BrainGames\Games\runEvenGame;
use function BrainGames\Games\runCalcGame;
use function BrainGames\Games\runGcdGame;
use function BrainGames\Games\runProgressionGame;

function run($game = null)
{
    line("\nWelcome to the Brain Games!");

    if ($game === 'even-game') {
        runEvenGame();
    } elseif ($game === 'calc-game') {
        runCalcGame();
    } elseif ($game === 'gcd-game') {
        runGcdGame();
    } elseif ($game === 'progression-game') {
        runProgressionGame();
    } else {
        greeting();
    }
}
