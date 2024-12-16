<?php

namespace helpers\compassion;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer


use function cli\line; // Импортируем функцию line
use function cli\prompt;

function wrongAnswer($answer, $correctAnswer, $name) 
{
  line("{$answer} is wrong answer ;(. Correct answer was {$correctAnswer}. Let's try again, {$name}");
}