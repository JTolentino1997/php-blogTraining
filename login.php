<!DOCTYPE html>
<html lang="en">

<?php 
require_once "head-tag.php";
require_once "./OOP/Middleware.php";

use OOP\Middleware;

(new Middleware())->guest();

$errors = $_SESSION['errors'] ?? [];
 
?>

<body>
  <h3>LOGIN PAGE</h3>
  
  <div class="container">
    <form action="./process-login.php" method="POST">

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php 
        echo "<p style='color:red'>". implode(',', $errors['email'] ?? []). "</p>";
        ?>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        <?php 
        echo "<p style='color:red'>". implode(',', $errors['password'] ?? []). "</p>";
        ?>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="./register.php">Register here</a>
  </form>
  </div>


<?php require_once "footer.php"?>
</body>
</html>