<?php

namespace Php\Project\Lvl1\Calc;

use function cli\line;
use function cli\prompt;

function brainCalc()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');
    $i = 0;
    $operations = ['+', '-', '*'];
    while ($i <= 2) {
        $operationNumber = rand(0, 2);
        $operation = $operations[$operationNumber];
        $firstNumber = rand(0, 99);
        $secondNumber = rand(0, 99);
        $questtion = 'Question: ' . $firstNumber . ' ' . $operation . ' ' . $secondNumber;
        switch ($operation) {
            case '+':
                $expectedAnswer = $firstNumber + $secondNumber;
                break;
            case '-':
                $expectedAnswer = $firstNumber - $secondNumber;
                break;
            case '*':
                $expectedAnswer = $firstNumber * $secondNumber;
                break;
        }
        line($questtion);
        $answer = prompt('Your answer');
        if ($answer == $expectedAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $expectedAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
        if ($i == 2) {
            line("Congratulations, %s!", $name);
        }
        $i++;
    }
}
