<?php
  require "dbconnect.php";

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  $first_name = $_POST["firstname"];
  $last_name = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // $sql = "INSERT INTO users (firstname, lastname, email, password) 
  //         VALUES ('$first_name', '$last_name', '$email', '$password')";

  // mysqli_query($connection, $sql);

  echo "User inserted successfully.";
?>