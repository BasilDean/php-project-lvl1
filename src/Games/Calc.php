<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBERS_OF_ROUNDS;

const DESCRIPTION = 'What is the result of the expression?';

function calc(int $n1, int $n2, string $operation): int
{
    switch ($operation) {
        case '-':
            return $n1 - $n2;
        case '*':
            return $n1 * $n2;
        case '+':
            return $n1 + $n2;
        default:
            throw new \Exception("Unknown operator: {$operation}");
    }
}
function brainCalc(): void
{
    $roundNumber = 1;
    $operations = ['+', '-', '*'];
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= NUMBERS_OF_ROUNDS) {
        $operationNumber = rand(0, sizeof($operations));
        $operation = $operations[$operationNumber];
        $firstNumber = rand(0, 99);
        $secondNumber = rand(0, 99);
        $questions[] = 'Question: ' . $firstNumber . ' ' . $operation . ' ' . $secondNumber;
        $expectedAnswers[] = calc($firstNumber, $secondNumber, $operation);
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
