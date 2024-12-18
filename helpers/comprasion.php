<?php

namespace helpers\comprasion;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer
require_once __DIR__ . '/../helpers/correctAnswer.php';
require_once __DIR__ . '/../helpers/compassion.php';
require_once __DIR__ . '/../src/cli.php';

use function helpers\correctAnswer\correctAnswer;
use function helpers\compassion\wrongAnswer;
use function src\cli;

use function cli\line; // Импортируем функцию line
use function cli\prompt;

function comprasion($answer, $correctAnswer, $name)
{
    if ($answer === $correctAnswer) {
        correctAnswer();
    } else {
        wrongAnswer($answer, $correctAnswer, $name);
        exit();
    }
}
