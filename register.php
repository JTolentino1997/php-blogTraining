<!DOCTYPE html>
<html lang="en">

  <?php 
  require_once "head-tag.php"; 
  require_once "./OOP/Middleware.php"; 

  use OOP\Middleware;
  (new Middleware())->guest();
  session_destroy();
  
  //  $errors = $_SESSION['errors'] ?? []; 
  
  $errors = $_SESSION['errors'] ?? [];
  
  ?>


<body>
  <h1>Register Page</h1>

  <div class="container">
    <form action="./process-register.php" method="POST" > 
      <div  class="mb-3">
        <label for="name" class="form-label">Name</label>   
        <input name="name" type="text" class="form-control" id="name">
        <?php
        echo "<p style='color: red'>". implode(',', $errors['name'] ?? []) .   "</p>";
        ?>
      </div>
    
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <?php
        echo "<p style='color: red'>" . implode(',', $errors['email'] ?? []) . "</p>";

        ?>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password">
        <?php
        echo "<p style='color: red'>". implode(',', $errors['password'] ?? []) .   "</p>";
        ?>
      </div>

      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input name="confirm_password" type="password" class="form-control" id="confirm_password">
      </div>  

      <button type="submit" class="btn btn-primary">Register</button>
      <a href="./login.php">Login</a>
  </form>
  </div>


<?php require_once "footer.php"?>
</body>
</html>