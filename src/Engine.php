<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $description, array $questions, array $expectedAnswers): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    for ($roundNumber = 0; $roundNumber <= 2; $roundNumber++) {
        line($questions[$roundNumber]);
        $answer = prompt('Your answer');
        if ($answer == $expectedAnswers[$roundNumber]) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswers[$roundNumber]);
            line("Let's try again, %s!", $name);
            break;
        }
        if ($roundNumber == 2) {
            line("Congratulations, %s!", $name);
        }
    }
}
