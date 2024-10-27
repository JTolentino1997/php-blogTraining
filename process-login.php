<?php

require_once "./OOP/Processlogin.php";

use OOP\Processlogin;
  
$processLoginClass = new Processlogin();
 
$processLoginClass->authorization();
$processLoginClass->validate();
$processLoginClass->authentication();
$processLoginClass->redirection();

?>