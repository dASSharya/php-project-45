<?php

namespace games\gcd;

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

function nod($randomN1, $randomN2)
{
      if ($randomN1 >= $randomN2) {
        for ($i = $randomN2; $i > 0; $i--) {
            if ($randomN1 % $i === 0 && $randomN2 % $i === 0) {
                return $i;
        }
        }
    } else {
        for ($j = $randomN1; $j > 0; $j--) {
            if ($randomN2 % $j === 0 && $randomN1 % $j === 0) {
              return $j;
            }
        }
    }
}

function expression($name)
{
    $randomN1 = rand(1, 100);
    $randomN2 = rand(1, 100);

    $expression = "$randomN1 $randomN2";

    question($expression);
    $correctAnswer = nod($randomN1, $randomN2);
    $answerStr = prompt('Your answer');
    $answer = (int)$answerStr;
    comprasion($answer, $correctAnswer, $name);
}

function gcdGame()
{
    $name = start();
    $text = "Find the greatest common divisor of given numbers.";
    description($text);

    for ($i = 0; $i < 3; $i++) {
        expression($name);
    };

    congrat($name);
}
