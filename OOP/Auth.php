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
    $this->guest();
    
     if($_SERVER['REQUEST_METHOD' === 'GET']){
        header("Location: index.php");
        die();
      }
      return $this;
  }

  public function authentication()
  {
    $databaseClass = new Database();

    $sql = "SELECT * FROM users
    WHERE email = '{$this->email}' 
    ORDER BY created_at ASC
    LIMIT 1";

    $results = $databaseClass->db->query($sql);

    if($results->num_rows > 0)
    {
      $user = (object)$results->fetch_assoc(); 
      
      if (password_verify($this->password, $user->password)) 
      {
        $_SESSION['auth'] = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
          ];
        } 
        else 
        {
            $this->errors['email'][] = "password doest match";
        }  
      }
    else 
    {
      $this->errors['email'][] = "Email or Password is incorrect";
    }
    
    if(count($this->errors) > 0){
      $_SESSION['errors'] = $this->errors;
      
      var_dump($_SESSION['errors']);
      die();
    }

    $_SESSION['errors'] = []; 
    
    return $this; 

  }

  public function redirection()
  {
    header("Location: index.php"); 
    die();

    return $this;
  }
}

?>