<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const NUMBERS_OF_ROUNDS = 3;
function runGame(string $description, array $questions, array $expectedAnswers): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    for ($roundNumber = 1; $roundNumber <= NUMBERS_OF_ROUNDS; $roundNumber++) {
        line('Question: %s', $questions[$roundNumber - 1]);
        $answer = prompt('Your answer');
        if ($answer != $expectedAnswers[$roundNumber - 1]) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswers[$roundNumber - 1]);
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}
