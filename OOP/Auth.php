<?php

namespace OOP;

require_once "./OOP/Database.php"; 
require_once "./OOP/Middleware.php";

use OOP\Database;
use OOP\Middleware;

abstract class Auth extends Middleware
{
  protected $name,
      $email,
      $password,
      $errors;

  public function authorization()
  {
     
  }
}

?>