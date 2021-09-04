<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBERS_OF_ROUNDS;

const DESCRIPTION = 'What number is missing in the progression?';
function brainProgression(): void
{
    $roundNumber = 1;
    $questions = [];
    $expectedAnswers = [];
    while ($roundNumber <= NUMBERS_OF_ROUNDS) {
        $arr = [];
        $length = rand(4, 9);
        $firstElem = rand(0, 20);
        $step = rand(1, 15);
        $arr[0] = $firstElem;
        for ($j = 1; $j <= $length; $j++) {
            $arr[] = $arr[$j - 1] + $step;
        }
        $numberOfMissingElement = rand(0, $length);
        $missingElement = $arr[$numberOfMissingElement];
        $arr[$numberOfMissingElement] = '..';
        $expectedAnswer = $missingElement;
        $string = implode(' ', $arr);
        $questions[] = "Question: " . $string;
        $expectedAnswers[] = $expectedAnswer;
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
