<?php

namespace helpers\comprasion;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer
require_once __DIR__ . '/../helpers/correctAnswer.php';
require_once __DIR__ . '/../helpers/compassion.php';


use function helpers\correctAnswer\correctAnswer;
use function helpers\compassion\wrongAnswer;


use function cli\line; // Импортируем функцию line
use function cli\prompt;

function comprasion(string|int $answer, string|int $correctAnswer, string $name)
{
    if ($answer === $correctAnswer) {
        correctAnswer();
    } else {
        wrongAnswer($answer, $correctAnswer, $name);
        exit();
    }
}
