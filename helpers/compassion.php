<?php

namespace helpers\compassion;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer
require_once __DIR__ . '/../helpers/correctAnswer.php';

use function helpers\correctAnswer\correctAnswer;


use function cli\line; // Импортируем функцию line
use function cli\prompt;

function wrongAnswer($answer, $correctAnswer, $name)
{
    line("{$answer} is wrong answer ;(. Correct answer was {$correctAnswer}.");
    line("Let's try again, {$name}!");
}
