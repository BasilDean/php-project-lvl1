<?php

namespace Php\Project\Lvl1\Games\Even;

use Php\Project\Lvl1\Engine;

function brainEven(): Collection
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    $i = 0;
    $questions = [];
    $expectedAnswers = [];
    while ($i <= 2) {
        $number = rand(1, 99);
        $number % 2 === 0 ? $expectedAnswer = 'yes' : $expectedAnswer = 'no';
        $questions[] = "Question: " . $number;
        $expectedAnswers[] = $expectedAnswer;
        $i++;
    }
    Engine\makeGame($description, $questions, $expectedAnswers);
}
