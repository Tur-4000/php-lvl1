<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const TOURS_COUNT_MAX = 3;

function play(callable $getGameData, string $instruction)
{
    line("\nWelcome to the Brain Games!");
    line($instruction . PHP_EOL);
    
    $playerName = prompt('May I have your name?');
    line("Hello, ${playerName}!" . PHP_EOL);

    for ($i = 1; $i <= TOURS_COUNT_MAX; $i += 1) {
        [$correctAnswer, $question] = $getGameData();
        
        line("Question: {$question}");
        $playerAnswer = prompt('Your answer');

        if ($correctAnswer == $playerAnswer) {
            line("Correct!");
        } else {
            line("'${playerAnswer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
            line("Let's try again, ${playerName}!");
            exit();
        }
    }

    line("Congratulations, ${playerName}!");
}
