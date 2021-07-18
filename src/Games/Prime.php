<?php

namespace Php\Project\Lvl1\Games\Prime;

use Php\Project\Lvl1\Engine;

function brainPrime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $i = 0;
    while ($i <= 2) {
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
        $i++;
    }
    Engine\makeGame($rules, $questions, $expectedAnswers);
}
