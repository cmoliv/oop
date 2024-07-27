<?php

header("Content-type: application/json");

require "vendor/autoload.php";

use app\classes\{Crud, Login, Book, Abajur};
use app\model\{User, Product};

$user = new User();

echo $user->all() . "\n";

$product = new Product();

echo $product->delete();