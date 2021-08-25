<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNTER;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function is_prime($n): bool
{
    for ($x = 2; $x < $n; $x++) {
        if ($number % $x == 0) {
            return false;
        }
        return true;
    }
}

function brainPrime(): void
{
    $roundNumber = 0;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= 2) {
        $number = rand(1, 999);
        $answer = is_prime($number) ? 'yes' : 'no';
        $questions[] = "Question: " . $number;
        $expectedAnswers[] = $answer;
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
