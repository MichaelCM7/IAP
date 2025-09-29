<?php
  require "dbconnect.php";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  $email = $_POST["email"];
  $password = $_POST["password"];

  $prepStmt = $connection->prepare("SELECT password FROM USERS WHERE email = ?");
  $prepStmt->bind_param("s",$email);
  $prepStmt->execute();
  $result = $prepStmt->get_result();

  echo "<pre>";
  print_r($result);
  echo "</pre>";

  if ($result->num_rows === 1){
    $row = $result->fetch_assoc();
    $stored_hash = $row["password"];

    if(password_verify($password,$stored_hash)){
      echo "Login Successful";
    } else {
      echo "Login Failed. Incorrect Password.";
    } 
  } else {
    echo "Login Failed. Email not found!";
  }
  

  // if($result) {
  //   echo "<h1>Successfully Logged In</h1>";
  // } else {
  //   echo "<h1>Failed to Log In</h1>";
  // }

  //echo "<button>Continue</button>"
  
?>