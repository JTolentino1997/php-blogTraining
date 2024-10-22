<?php

require_once "./OOP/ProcessRegister.php";

use OOP\ProcessRegister;
 

$processRegisterClass = new ProcessRegister(); 
 
$processRegisterClass->
->authorization()
->validate(); 

// $processRegisterClass->save();
// $processRegisterClass->authentication();
// $processRegisterClass->redirection();

?>