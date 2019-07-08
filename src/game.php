<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;

const FIRST_TOUR = 1;
const LAST_TOUR = 3;

function play($question, $instruction, $playerName = null, $i = FIRST_TOUR)
{
    if ($i === FIRST_TOUR) {
        line("\nWelcome to the Brain Games!");
        line($instruction . PHP_EOL);
        
        $playerName = prompt('May I have your name?');
        line("Hello, ${playerName}!" . PHP_EOL);
    }

    if ($i > LAST_TOUR) {
        return line("Congratulations, ${playerName}!");
    }

    $gameOver = function () use ($playerName) {
        line("Let's try again, ${playerName}!");
    };

    $tour = function () use ($question) {
        $question = $question();
        $correctAnswer = $question['correctAnswer'];
        
        line("Question: {$question['question']}");
        $playerAnswer = prompt('Your answer');

        if ($correctAnswer == $playerAnswer) {
            line("Correct!");
            return true;
        }

        line("'${playerAnswer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
        return false;
    };

    return $tour() ? play($question, $instruction, $playerName, $i += 1) : $gameOver();
}
