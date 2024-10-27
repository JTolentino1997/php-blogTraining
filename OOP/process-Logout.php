<?php

namespace OOP;

class ProcessLogout
{
  public function __construct() 
  {
    if(!isset($_SESSION))
    {
      session_start();
    }
  }

  public function logout()
  {
      if(isset($_SESSION['auth']))
      {
        session_destroy();
      }
      
      return $this;
  }

  public function redirection()
  {
    header('Location: login.php');
    die();

    return $this;
  } 
  
}
 
?>