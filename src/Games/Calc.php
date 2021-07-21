<?php

namespace Php\Project\Lvl1\Games\Calc;

use Php\Project\Lvl1\Engine;

function brainCalc(): Collection
{
    $description = 'What is the result of the expression?';
    $i = 0;
    $operations = ['+', '-', '*'];
    $questions = [];
    $expectedAnswers = [];
    while ($i <= 2) {
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
        $i++;
    }
    Engine\makeGame($description, $questions, $expectedAnswers);
}
