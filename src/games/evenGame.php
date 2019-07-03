<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Cli\greeting;

function runEvenGame()
{
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);

    $playerName = greeting();

    $result = evenGame();

    if ($result) {
        line("Congratulations, ${playerName}!");
    } else {
        line("Let's try again, ${playerName}!");
    }
}

function evenGame()
{
    $i = 0;

    while ($i < 3) {
        $num = rand(0, 99);
        line("Question: ${num}");
        $answer = prompt('Your answer: ');

        if ($num % 2 === 0) {
            if ($answer === 'yes') {
                line("Correct!");
            } else {
                line("'${answer}' is wrong answer ;(. Correct answer was 'yes'.");
                return false;
            }
        } else {
            if ($answer === 'no') {
                line("Correct!");
            } else {
                line("'${answer}' is wrong answer ;(. Correct answer was 'no'.");
                return false;
            }
        }

        $i += 1;
    }

    return true;
}
