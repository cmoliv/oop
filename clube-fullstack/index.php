<?php

header("Content-type: application/json");

require "vendor/autoload.php";

use app\classes\{Crud, Login, Book, Abajur};
use app\model\{User, Product};

class Template
{
  const PATH = "app/views";

  public function load()
  {
    return static::PATH;
  }
}

class Twig extends Template
{
  const PATH = "app/views/twig";

  public function load()
  {
    return self::PATH;
  }
}

// echo (new Twig)->load();

/**
 * Exceptions
 */

class TestException extends Exception
{
  public function message(): string
  {
    // set default timezone
    date_default_timezone_set('America/Sao_Paulo');

    // get the current date & time
    $time = date('F j, Y, g:i a e O');

    // format the exception message
    $message = "[{$time}]: Erro no arquivo {$this->getFile()} na linha {$this->getLine()} com a mensagem: {$this->getMessage()}\n";

    // append to the error log
    error_log($message, 3, 'app/logs/errors.log');

    return "Um erro inesperado aconteceu!";
  }

  public function __toString(): string
  {
    return "Um erro inesperado aconteceu!";
  }
}

class Test
{
  public function methodTest()
  {
    throw new TestException('erro teste');
  }
}

try {
  $test = new Test;

  $test->methodTest();
} catch (TestException $e) {
  echo "Exception: {$e}";
}
