<?php

namespace OOP;

require_once "./OOP/Auth.php";

use OOP\Auth;
 
class ProcessRegister extends Auth
{  
  private $passwordConfirmation;

  public function __construct()
  { 
    
    if (!isset($_SESSION)) session_start();
    $this->name = $_POST['name'];
    $this->email = $_POST['email'];
    $this->password = $_POST['password'];
    $this->passwordConfirmation = $_POST['confirm_password'];

    $this->errors = []; 

  }
 
  public function validate()
  {
    $this->validateName();
    $this->validateEmail();
    $this->validatePassword();

    // $_SESSION['errors'] = $this->errors;

    // var_dump($_SESSION['errors']);

    // die();
    if(count($this->errors) > 0 )
    {
      $_SESSION['errors'] = $this->errors;

      header("Location: register.php");
      die();
    }
    $_SESSION['errors'] = [];

    return $this;
  }
 
  private function validateName()
  {
    if(empty($this->name))
    {
      $this->errors['name'][] = "Name is required";
    }

    if((int)$this->name && is_numeric((int)$this->name))
    {
      $this->errors['name'][] = "Name is invalid";
    }

    if(strlen($this->name) > 50)
    {
      $this->errors['name'] [] = "Name is too long";
    }

    return $this;
  }

  public function validateEmail()
  {
    if(empty($this->email))
    {
      $this->errors['email'][] = "Email is required";
    }  

    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
    {
      $this->errors['email'][] ="Email is invalid email format";
    }
    
    return $this;
  }

  public function validatePassword()
  {
    if($this->password !== $this->passwordConfirmation)
    {
      $this->errors['password'][] = "Password does not match!";
    }

    if(
      strlen($this->password) < 8 ||
      strlen($this->password) > 12
     )
    {
      $this->errors['password'] [] = "Password must be between 8 to 12";
    } 
    return $this;
  }

}

?>