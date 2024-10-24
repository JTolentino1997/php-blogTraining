<?php
  namespace OOP;

  require_once "./OOP/middleware.php";
  require_once "./OOP/database.php";


  use OOP\Middleware;
  use OOP\Database;
  
  class ProcessIndex extends Middleware
  {
    public function __construct() 
    {
      $this->authenticated();
    } 
    
  }


?>