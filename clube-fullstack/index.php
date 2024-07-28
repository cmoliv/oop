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

echo (new Twig)->load();