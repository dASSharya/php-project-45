<?php

namespace helpers\correctAnswer;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer


use function cli\line; // Импортируем функцию line
use function cli\prompt;

function correctAnswer()
{
    line("Correct!");
}
