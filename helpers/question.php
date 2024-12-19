<?php

namespace helpers\question;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer


use function cli\line; // Импортируем функцию line
use function cli\prompt;


function question(int|string $randomN)
{
    line("Question: {$randomN}");
}
