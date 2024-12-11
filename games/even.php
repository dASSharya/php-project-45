<?php

namespace games\even;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer


use function cli\line; // Импортируем функцию line
use function cli\prompt;

function isItParity($number)
{
      return $number % 2 === 0 ? 'yes' : 'no';
}

if (!function_exists(__NAMESPACE__ . '\start')) {
    function start()
    {
        line("Welcome to the Brain Games!");

        $name = prompt("May I have your name?");

        line("Hello, $name!");
        return $name;
    }
}


function evenGame()
{
    $name = start();

    function description()
    {
        line("Answer 'yes' if the number is even, otherwise answer 'no'.");
    }
    function randomNumb($name)
    {
        $randomN = rand(1, 100);
        line("Question: {$randomN}");
        $answer = prompt("Your answer");

        $correctAnswer = isItParity($randomN);

        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$correctAnswer}. Let's try again, {$name}");
            exit();
        }
    }
    description();
    for ($i = 0; $i < 3; $i++) {
        randomNumb($name);
    }
    line("Congratulations, {$name}!");
}
