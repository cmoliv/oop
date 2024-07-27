<?php

header("Content-type: application/json");

require "vendor/autoload.php";

use app\classes\{Crud, Login, Book, Abajur};

$book = new Book();

$book->name = "Livro";
$book->description = "Um livro cheio de histórias interessantes";
$book->author = "John Doe";
$book->pages = 300;

echo json_encode($book);

$abajur = new Abajur;

$abajur->name = "Abajur lindão";
$abajur->description = "Um abajur bem luminoso";
$abajur->is_on = true;

echo json_encode($abajur);