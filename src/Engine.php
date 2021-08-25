<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUND_COUNTER = 2;
function runGame(string $description, array $questions, array $expectedAnswers): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    for ($roundNumber = 0; $roundNumber <= ROUND_COUNTER; $roundNumber++) {
        line($questions[$roundNumber]);
        $answer = prompt('Your answer');
        if ($answer != $expectedAnswers[$roundNumber]) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswers[$roundNumber]);
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}
