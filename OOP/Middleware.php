<?php

namespace OOP;

class Middleware
{
  public function authenticated()
  {
      if(!isset($_SESSION)) session_start();

      if(!isset($_SESSION['auth']))
      {
        header('Location: login.php');
        die();
      }
  }

}
 

?>