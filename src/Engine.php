<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

function makeGame(string $description, array $questions, array $expectedAnswers): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    for ($i = 0; $i <= 2; $i++) {
        line($questions[$i]);
        $answer = prompt('Your answer');
        if ($answer == $expectedAnswers[$i]) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswers[$i]);
            line("Let's try again, %s!", $name);
            break;
        }
        if ($i == 2) {
            line("Congratulations, %s!", $name);
        }
    }
}
