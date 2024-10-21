<?php

namespace OOP;

use mysqli;

class Database 
{
  private $server,
          $database,
          $username,
          $password;
        
  public $db;

  public function __construct()
  {
    $this->server = "localhost";
    $this->database = "blog";
    $this->username = "root";
    $this->password = "";

    $this->db = new mysqli(
      $this->server,
      $this->username,
      $this->password,
      $this->database,
    );

    if($this->db->connect_error)
    {
      echo "Database connection failed!". "<br>";
      die("connection failed: " . $this->db-> connect_error);
    }
    
    // else
    // {
    //   echo "Connection success";
    // }
  }
   

  public function __destruct()
  {
    $this->db->close();
  }
  
}



?>