<?php

namespace BrainGames\Games;

use function BrainGames\Games\play;

const PRIME_INSTRUCTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function runPrimeGame()
{
    $makeQuestion = function () {
        $question = rand(2, 100);

        $correctAnswer = (isPrime($question)) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    play($makeQuestion, PRIME_INSTRUCTION);
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    
    for ($i = 2, $sqrtNum = sqrt($num); $i <= $sqrtNum; $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
