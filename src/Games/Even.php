<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBERS_OF_ROUNDS;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function is_even(int $n): bool
{
    return $n % 2 === 0;
}

function brainEven(): void
{
    $roundNumber = 1;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= NUMBERS_OF_ROUNDS) {
        $number = rand(1, 99);
        $questions[] = "Question: " . $number;
        $expectedAnswer = is_even($number) ? 'yes' : 'no';
        $expectedAnswers[] = $expectedAnswer;
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
