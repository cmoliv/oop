<?php

namespace app\classes;

class Crud
{
  public $field = "field test";
  public $table = "users";

  public function read()
  {
    var_dump($this->field);
    return $this;
  }

  public function delete()
  {
    var_dump($this->table);
    return $this;
  }
}
