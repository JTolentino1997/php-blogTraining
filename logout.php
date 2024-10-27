<?php

require_once "OOP/process-logout.php";

use OOP\ProcessLogout;

(new ProcessLogout())->logout()->redirection();

?>