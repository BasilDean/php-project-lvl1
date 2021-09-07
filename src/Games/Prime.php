<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBERS_OF_ROUNDS;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function is_prime(int $n): bool
{
    if (($n === 1) || ($n === 2)) {
        return true;
    }
    for ($x = 2; $x < $n / 2; $x++) {
        if (($n % $x) == 0) {
            return false;
        }
    }
    return true;
}

function brainPrime(): void
{
    $roundNumber = 1;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= NUMBERS_OF_ROUNDS) {
        $number = rand(1, 999);
        $answer = is_prime($number) ? 'yes' : 'no';
        $questions[] = $number;
        $expectedAnswers[] = $answer;
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
