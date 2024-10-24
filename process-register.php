<?php

require_once "./OOP/ProcessRegister.php";

use OOP\ProcessRegister;


$processRegisterClass = new ProcessRegister(); 

$processRegisterClass->authorization();
$processRegisterClass->validate();
$processRegisterClass->save();
$processRegisterClass->authentication();
$processRegisterClass->redirection();
  
 
?>