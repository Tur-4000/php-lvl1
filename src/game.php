<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;

const FIRST_TOUR = 1;
const LAST_TOUR = 3;
const INSTRUCTION = [
    'even' => 'Answer "yes" if number even otherwise answer "no".',
    'calc' => 'What is the result of the expression?',
    'gcd' => 'Find the greatest common divisor of given numbers.',
    'progression' => 'What number is missing in the progression?',
    'prime' => 'Answer "yes" if given number is prime. Otherwise answer "no".'
];

function play($question, $game, $playerName = null, $i = FIRST_TOUR)
{
    if ($i === FIRST_TOUR) {
        line("\nWelcome to the Brain Games!");
        line(INSTRUCTION[$game] . PHP_EOL);
        
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
        $correctAnswer = $question();
        $playerAnswer = prompt('Your answer');

        if ($correctAnswer == $playerAnswer) {
            line("Correct!");
            return true;
        }

        line("'${playerAnswer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
        return false;
    };

    return $tour() ? play($question, $game, $playerName, $i += 1) : $gameOver();
}
