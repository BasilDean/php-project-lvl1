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
        $progression = [];
        $progressionLength = rand(4, 9);
        $firstElemOfProgression = rand(0, 20);
        $progressionStep = rand(1, 15);
        $progression[0] = $firstElemOfProgression;
        for ($j = 1; $j <= $progressionLength; $j++) {
            $progression[] = $progression[$j - 1] + $progressionStep;
        }
        $numberOfMissingElement = rand(0, $progressionLength);
        $missingElement = $progression[$numberOfMissingElement];
        $progression[$numberOfMissingElement] = '..';
        $expectedAnswer = $missingElement;
        $string = implode(' ', $progression);
        $questions[] = $string;
        $expectedAnswers[] = $expectedAnswer;
        $roundNumber++;
    }
    runGame(DESCRIPTION, $questions, $expectedAnswers);
}
