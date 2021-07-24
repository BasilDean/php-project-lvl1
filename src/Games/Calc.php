<?php

namespace BrainGames\Games\Calc;

use BrainGames\Engine;

const DESCRIPTION = 'What is the result of the expression?';
function brainCalc(): void
{
    $roundNumber = 0;
    $operations = ['+', '-', '*'];
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= 2) {
        $operationNumber = rand(0, 2);
        $operation = $operations[$operationNumber];
        $firstNumber = rand(0, 99);
        $secondNumber = rand(0, 99);
        $questions[] = 'Question: ' . $firstNumber . ' ' . $operation . ' ' . $secondNumber;
        switch ($operation) {
            case '+':
                $expectedAnswers[] = $firstNumber + $secondNumber;
                break;
            case '-':
                $expectedAnswers[] = $firstNumber - $secondNumber;
                break;
            case '*':
                $expectedAnswers[] = $firstNumber * $secondNumber;
                break;
        }
        $roundNumber++;
    }
    Engine\runGame(DESCRIPTION, $questions, $expectedAnswers);
}
