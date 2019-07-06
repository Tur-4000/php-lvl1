<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

function runPrimeGame()
{
    $question = function () {
        $question = rand(2, 100);

        line("Question: $question");

        return (isPrime($question)) ? 'yes' : 'no';
    };

    play($question, 'prime');
}

function isPrime($num)
{
    $divisor = 2;
    while ($num % $divisor !== 0) {
        $divisor += 1;
    }

    return $num === $divisor;
}
