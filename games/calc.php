<?php

namespace games\calc;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer


use function cli\line; // Импортируем функцию line
use function cli\prompt;
use function helpers\description\description;

function calc() 
{
  $text = "What is the result of the expression?";
  description($text);
}