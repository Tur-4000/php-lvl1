<?php

namespace BrainGames\Utils;

function gcd($a, $b)
{
    return ($b > 0) ? gcd($b, $a % $b) : $a;
}
