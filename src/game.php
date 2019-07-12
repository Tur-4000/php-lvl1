<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;

const MAX_COUNT_TOUR = 3;

function play(callable $getQuestion, string $instruction)
{
    line("\nWelcome to the Brain Games!");
    line($instruction . PHP_EOL);
    
    $playerName = prompt('May I have your name?');
    line("Hello, ${playerName}!" . PHP_EOL);

    for ($i = 1; $i <= MAX_COUNT_TOUR; $i += 1) {
        [$correctAnswer, $question] = $getQuestion();
        
        line("Question: {$question}");
        $playerAnswer = prompt('Your answer');

        if ($correctAnswer == $playerAnswer) {
            line("Correct!");
        } else {
            line("'${playerAnswer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
            return line("Let's try again, ${playerName}!");
        }
    }

    return line("Congratulations, ${playerName}!");
}
