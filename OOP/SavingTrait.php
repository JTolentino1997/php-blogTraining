<?php

namespace OOP;

require_once "./OOP/Database.php";

use OOP\Database;

trait SavingTrait
{
  public function save()
  {
    $databaseClass = new Database();

    $name = htmlspecialchars($this->name);
    $email =htmlspecialchars($this->email);
    $password = htmlspecialchars($this->password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (
      name, 
      email, 
      password, 
      created_at,
      updated_at)
      VALUES (
      '{$name}',
      '{$email}',
      '{$password}',
      CURRENT_TIMESTAMP,
      CURRENT_TIMESTAMP
      )";

      $databaseClass->db->query($sql);

      return $this;
  }
}
?>