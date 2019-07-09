<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;

const FIRST_TOUR = 1;
const LAST_TOUR = 3;

function play(callable $getQuestion, string $instruction)
{
    line("\nWelcome to the Brain Games!");
    line($instruction . PHP_EOL);
    
    $playerName = prompt('May I have your name?');
    line("Hello, ${playerName}!" . PHP_EOL);

    $gameOver = function () use ($playerName) {
        line("Let's try again, ${playerName}!");
    };

    for ($i = FIRST_TOUR; $i <= LAST_TOUR; $i += 1) {
        $question = $getQuestion();
        $correctAnswer = $question['correctAnswer'];
        
        line("Question: {$question['question']}");
        $playerAnswer = prompt('Your answer');

        if ($correctAnswer == $playerAnswer) {
            line("Correct!");
        } else {
            line("'${playerAnswer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
            return $gameOver();
        }
    }

    return line("Congratulations, ${playerName}!");
}
