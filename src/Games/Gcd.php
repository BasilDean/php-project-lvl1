<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBERS_OF_ROUNDS;

function gcd(int $n, int $m): int
{
    if ($m > 0) {
        return gcd($m, $n % $m);
    } else {
        return abs($n);
    }
}

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
function findGcd(): void
{
    $roundNumber = 1;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= NUMBERS_OF_ROUNDS) {
        $number1 = rand(1, 99);
        $number2 = rand(1, 99);
        $expectedAnswer = gcd($number1, $number2);
        $questions[] = "Question: " . $number1 . ' ' . $number2;
        $expectedAnswers[] = $expectedAnswer;
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
