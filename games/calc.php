<?php

namespace games\calc;

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
use function helpers\description\description;
use function helpers\congratulations\congrat;
use function helpers\correctAnswer\correctAnswer;
use function helpers\compassion\wrongAnswer;
use function helpers\question\question;
use function helpers\comprasion\comprasion;

use function src\cli\start;

function randomChar(array $chars)
{
    $chars = ['+', "-", "*"];
    $length = count($chars);
    $randIndex = rand(1, $length - 1);
    return $chars[$randIndex];
}

function expression(array $chars, string $name)
{
    $randomN1 = rand(1, 100);
    $randomN2 = rand(1, 10);
    $randomChar = randomChar($chars);
    $expression = "$randomN1 $randomChar $randomN2";

    question($expression);

    $correctAnswer = eval("return $expression;");
    
    
    $answerStr = prompt('Your answer');
    $answer = (int)$answerStr;
    $typeOfCorrectAnswer = gettype($answer);
    line($typeOfCorrectAnswer);
    comprasion($answer, $correctAnswer, $name);
}

function calc()
{
    $chars = ['+', "-", "*"];
    $name = start();
    $text = "What is the result of the expression?";
    description($text);

    for ($i = 0; $i < 3; $i++) {
        expression($chars, $name);
    }
    congrat($name);
}
