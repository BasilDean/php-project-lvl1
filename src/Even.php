<?php

namespace Php\Project\Lvl1\Even;

use function cli\line;
use function cli\prompt;

function brainEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $i = 0;
    while ($i <= 2) {
        $number = rand();
        $number % 2 === 0 ? $expectedAnswer = 'yes' : $expectedAnswer = 'no';
        line("Question: %s", $number);
        $answer = prompt('Your answer');
        if ($answer === $expectedAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
        if ($i == 2) {
            line("Congratulations, %s!", $name);
        }
        $i++;
    }
}
