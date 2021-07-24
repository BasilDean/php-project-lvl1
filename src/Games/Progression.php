<?php

namespace BrainGames\Games\Progression;

use BrainGames\Engine;

const DESCRIPTION = 'What number is missing in the progression?';
function brainProgression(): void
{
    $roundNumber = 0;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= 2) {
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
        $string = implode(' ', $arr);
        $questions[] = "Question: " . $string;
        $expectedAnswers[] = $expectedAnswer;
        $roundNumber++;
    }
    Engine\runGame(DESCRIPTION, $questions, $expectedAnswers);
}
