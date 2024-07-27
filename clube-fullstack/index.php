<?php

require "vendor/autoload.php";

use app\classes\Crud;

$crud = new Crud;

// echo $crud->read();
var_dump($crud->delete()->read());