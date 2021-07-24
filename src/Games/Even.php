<?php

namespace BrainGames\Games\Even;

use BrainGames\Engine;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
function brainEven(): void
{
    $roundNumber = 0;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= 2) {
        $number = rand(1, 99);
        $number % 2 === 0 ? $expectedAnswer = 'yes' : $expectedAnswer = 'no';
        $questions[] = "Question: " . $number;
        $expectedAnswers[] = $expectedAnswer;
        $roundNumber++;
    }
    Engine\runGame(DESCRIPTION, $questions, $expectedAnswers);
}
