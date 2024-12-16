<?php

namespace helpers\random;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer


use function cli\line; // Импортируем функцию line
use function cli\prompt;



function randomNumb($name)
{
    $randomN = rand(1, 100);
    line("Question: {$randomN}");
    $answer = prompt("Your answer");

    $correctAnswer = isItParity($randomN);

    if ($answer === $correctAnswer) {
      line("Debug: Correct answer given.");
      correctAnswer();
    } else {
        wrongAnswer($answer, $correctAnswer, $name);
        exit();
    }
}

function random()
{
  
}