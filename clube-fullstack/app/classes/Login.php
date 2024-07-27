<?php

namespace app\classes;

class Login
{
  public string $email;
  public string $password;

  public function auth(string $email, string $password): string
  {
    return "O meu email é {$email} e minha senha é {$password}";
  }
}
