<?php

namespace Php\Project\Lvl1\Games\Prime;

use Php\Project\Lvl1\Engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function brainPrime(): void
{
    $roundNumber = 0;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= 2) {
        $number = rand(1, 999);
        $answer = 'yes';
        for ($x = 2; $x < $number; $x++) {
            if ($number % $x == 0) {
                $answer = 'no';
            }
        }
        $expectedAnswer = $answer;
        $questions[] = "Question: " . $number;
        $expectedAnswers[] = $answer;
        $roundNumber++;
    }
    Engine\runGame(DESCRIPTION, $questions, $expectedAnswers);
}
