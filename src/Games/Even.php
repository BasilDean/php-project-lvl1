<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNTER;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function is_even($n): bool
{
    return $n % 2 === 0;
}

function brainEven(): void
{
    $roundNumber = 0;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= 2) {
        $number = rand(1, 99);
        $questions[] = "Question: " . $number;
        $expectedAnswer = is_even($number) ? 'yes' : 'no';
        $expectedAnswers[] = $expectedAnswer;
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
