<?php

namespace Php\Project\Lvl1\Games\Gcd;

use Php\Project\Lvl1\Engine;

function gcd($n, $m)
{
    if ($m > 0) {
        return gcd($m, $n % $m);
    } else {
        return abs($n);
    }
}

function findGcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $i = 0;
    while ($i <= 2) {
        $number1 = rand(1, 99);
        $number2 = rand(1, 99);
        $expectedAnswer = gcd($number1, $number2);
        $questions[] = "Question: " . $number1 . ' ' . $number2;
        $expectedAnswers[] = $expectedAnswer;
        $i++;
    }
    Engine\makeGame($rules, $questions, $expectedAnswers);
}
