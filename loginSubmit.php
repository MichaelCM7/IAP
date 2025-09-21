<?php
  require "dbconnect.php";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  $email = $_POST["email"];
  $password = $_POST["password"];

  $prepStmt = $connection->prepare("SELECT email,password FROM USERS WHERE email = ? AND password = ?;");
  $prepStmt->bind_param("ss",$email,$password);
  $prepStmt->execute();
  $result = $prepStmt->get_result();

  if($result) {
    echo "<h1>Successfully Logged In</h1>";
  } else {
    echo "<h1>Failed to Log In</h1>";
  }

  echo "<button>Continue</button>"
  
?>