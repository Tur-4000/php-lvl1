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
