<?php

namespace BrainGames\Games;

use function \cli\line;
use function BrainGames\Games\play;

function runPrimeGame()
{
    $instruction = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $question = function () {
        $question = rand(2, 100);

        line("Question: $question");

        return (isPrime($question)) ? 'yes' : 'no';
    };

    play($question, $instruction);
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    
    $divisor = 2;
    while ($num % $divisor !== 0) {
        $divisor += 1;
    }

    return $num === $divisor;
}
