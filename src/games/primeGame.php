<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;
use function BrainGames\Games\game;
use function BrainGames\Utils\isPrime;

function runPrimeGame()
{
    welcome();
    line('Answer "yes" if given number is prime. Otherwise answer "no".' . PHP_EOL);
    $playerName = greeting();

    $question = function () {
        $question = rand(2, 100);

        line("Question: ${question}");

        return (isPrime($question)) ? 'yes' : 'no';
    };

    game($playerName, $question);
}
