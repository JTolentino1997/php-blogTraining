<!DOCTYPE html>
<html lang="en">

<?php require_once "head-tag.php";

  require_once "./OOP/middleware.php";
  require_once "./OOP/ProcessIndex.php";

  use OOP\Middleware;
  use OOP\ProcessIndex;

(new Middleware())->authenticated();



?>

<body> 
<?php require_once "header.php" ?>
<h1>HOME PAGE</h1>



<?php require_once "footer.php"?>

</body>
</html>