<?php

namespace Php\Project\Lvl1\Games\Progression;

use Php\Project\Lvl1\Engine;

function brainProgression()
{
    $rules = 'What number is missing in the progression?';
    $i = 0;
    while ($i <= 2) {
        $arr = [];
        $arrayLength = rand(4, 9);
        $startElement = rand(0, 20);
        $step = rand(1, 15);
        $arr[0] = $startElement;
        for ($j = 1; $j <= $arrayLength; $j++) {
            $arr[] = $arr[$j - 1] + $step;
        }
        $numberOfMissingElement = rand(0, $arrayLength);
        $missingElement = $arr[$numberOfMissingElement];
        $arr[$numberOfMissingElement] = '..';
        $expectedAnswer = $missingElement;
        $string = implode($arr, ' ');
        $questions[] = "Question: " . $string;
        $expectedAnswers[] = $expectedAnswer;
        $i++;
    }
    Engine\makeGame($rules, $questions, $expectedAnswers);
}
