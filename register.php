<?php
  require('connection.php');

  $ime = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users VALUES(NULL, '$ime','$email','$password')";
  $query = mysqli_query($db, $sql);

  if ($query) {
    header('Location: login.view.php');
  }
  else {
    echo "Doslo je do greske pri registraciji.";
  }
 ?>
