<?php

namespace games\prime;

require_once __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer
require_once __DIR__ . '/../helpers/description.php';
require_once __DIR__ . '/../helpers/congratulations.php';
require_once __DIR__ . '/../helpers/compassion.php';
require_once __DIR__ . '/../helpers/correctAnswer.php';
require_once __DIR__ . '/../helpers/question.php';
require_once __DIR__ . '/../helpers/comprasion.php';
require_once __DIR__ . '/../src/cli.php';


use function cli\line; // Импортируем функцию line
use function cli\prompt;
use function src\cli\start;
use function helpers\description\description;
use function helpers\congratulations\congrat;
use function helpers\correctAnswer\correctAnswer;
use function helpers\compassion\wrongAnswer;
use function helpers\question\question;
use function helpers\comprasion\comprasion;

function isItEven(int $numb)
{
    for ($i = round($numb / 2); $i > 1; $i--) {
        if ($numb % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}

function expression(string $name)
{
    $randomN1 = rand(2, 100);

    question($randomN1);
    $correctAnswer = isItEven($randomN1);

    $answerStr = prompt('Your answer');
    $answer = $answerStr;
    comprasion($answer, $correctAnswer, $name);
}

function primeGame()
{
    $name = start();
    $text = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    description($text);

    for ($i = 0; $i < 3; $i++) {
        expression($name);
    }

    congrat($name);
}
