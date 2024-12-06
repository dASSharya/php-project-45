<?php
namespace src\cli;

use function cli\prompt;
use function cli\line;

if (!function_exists(__NAMESPACE__ . '\start')) {
   function start()
  {
    line("Welcome to the Brain Games!"); 

    $name = prompt("May I have your name?");

    line("Hello, $name!");
    
    return $name;
  }
}

?>
