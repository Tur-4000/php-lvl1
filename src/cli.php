<?php

namespace BrainGames\Cli;

use function \cli\line;
use function BrainGames\Games\welcome;
use function BrainGames\Games\greeting;

function run()
{
    welcome();
    greeting();
}
