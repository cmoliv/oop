<?php

require "vendor/autoload.php";

use app\classes\{Crud, Login};

$crud = new Crud;

$login = new Login;

try {
  echo $login->auth('christian@email.com', '123456');
} catch (Error $error) {
  echo 'Error: ' . $error->getMessage();
} catch (Exception $ex) {
  echo 'Exception: ' . $ex->getMessage();
}
