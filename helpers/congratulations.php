<?php

namespace helpers\congratulations;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer


use function cli\line; // Импортируем функцию line
use function cli\prompt;

function congrat(string $name)
{
    line("Congratulations, {$name}!");
}
