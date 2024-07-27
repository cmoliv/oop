<?php

require "vendor/autoload.php";

use app\classes\Login;

$auth = new Login;

$auth->email = "christian@email.com";
$auth->password = "123456";

echo $auth->auth() . "\n";

$user = ['email' => 'christian@email.com', 'password' => '123456'];

var_dump((object)$user);

