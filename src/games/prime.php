<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Game\play;

const INSTRUCTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function runPrimeGame()
{
    $makeGameData = function () {
        $question = rand(2, 100);

        $correctAnswer = (isPrime($question)) ? 'yes' : 'no';

        return [$correctAnswer, $question];
    };

    play($makeGameData, INSTRUCTION);
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    
    for ($i = 2, $upperBound = sqrt($num); $i <= $upperBound; $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
