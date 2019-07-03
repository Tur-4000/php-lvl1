<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;

function answer()
{
    return prompt('Your answer: ');
}

function endGame($playerName)
{
    line("Congratulations, ${playerName}!");
}

function gameOver($playerName)
{
    line("Let's try again, ${playerName}!");
}

function tour($question)
{
    $correctAnswer = $question();
    $answer = answer();

    if ($correctAnswer == $answer) {
        line("Correct!");
        return true;
    }

    line("'${answer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
    return false;
}

function game($playerName, $question, $i = 1)
{
    if ($i > 3) {
        return endGame($playerName);
    }

    return tour($question) ? game($playerName, $question, $i += 1) : gameOver($playerName);
}
