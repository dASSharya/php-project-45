<?php

namespace games\progression;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer
require_once __DIR__ . '/../helpers/description.php';
require_once __DIR__ . '/../helpers/congratulations.php';
require_once __DIR__ . '/../helpers/compassion.php';
require_once __DIR__ . '/../helpers/correctAnswer.php';
require_once __DIR__ . '/../helpers/question.php';
require_once __DIR__ . '/../helpers/comprasion.php';
require_once __DIR__ . '/../src/cli.php';


use function cli\line; // Импортируем функцию line
use function cli\prompt;
use function src\cli\start;
use function helpers\description\description;
use function helpers\congratulations\congrat;
use function helpers\correctAnswer\correctAnswer;
use function helpers\compassion\wrongAnswer;
use function helpers\question\question;
use function helpers\comprasion\comprasion;


function expression($name)
{
    $randomN1 = rand(1, 100);
    $randomSummand = rand(1, 10);
    $randomIndexOFEllipsis = rand(2, 9);

    $array = [$randomN1];

    for ($i = 1; $i < 10; $i++) {
        $array[] = $array[$i - 1] + $randomSummand;
    }

    $arrayWithEllipsis = $array;
    $arrayWithEllipsis[$randomIndexOFEllipsis - 1] = '..';
    $expression = implode(' ', $arrayWithEllipsis);

    question($expression);
    $correctAnswer = $array[$randomIndexOFEllipsis - 1];
    $answerStr = prompt('Your answer');
    $answer = (int)$answerStr;
    comprasion($answer, $correctAnswer, $name);
}


function progressionGame()
{
    $name = start();
    $text = "What number is missing in the progression?";
    description($text);

    for ($i = 0; $i < 3; $i++) {
        expression($name);
    };

    congrat($name);
}
