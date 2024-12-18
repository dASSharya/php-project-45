<?php

namespace games\even;

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

function isItParity(int $number)
{
      return $number % 2 === 0 ? 'yes' : 'no';
}

function randomNumb(string $name)
{
    $randomN = rand(1, 100);
    question($randomN);
    $answer = prompt("Your answer");

    $correctAnswer = isItParity($randomN);

    comprasion($answer, $correctAnswer, $name);
}

function evenGame()
{
    $name = start();
    $text = 'Answer "yes" if the number is even, otherwise answer "no".';

    description($text);

    for ($i = 0; $i < 3; $i++) {
        randomNumb($name);
    }

    congrat($name);
}
