<?php

namespace BrainGames\Utils;

function gcd($a, $b)
{
    return ($b > 0) ? gcd($b, $a % $b) : $a;
}

function genProgression($firstNum, $delta)
{
    $progression = [$firstNum];

    for ($i = 1; $i < 10; $i += 1) {
        $progression[] += $progression[$i - 1] + $delta;
    }

    return $progression;
}

function isPrime($num)
{
    $divisor = 2;
    $upperBorder = $num / 2;
    while ($num % $divisor !== 0) {
        $divisor += 1;
    }

    return $num === $divisor;
}
