<?php
  require "dbconnect.php";
  require_once __DIR__ . '/Plugins/PHPMailer/vendor/autoload.php';
  require __DIR__. "/Global/SendMail.php";

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  $first_name = $_POST["firstname"];
  $last_name = $_POST["lastname"];
  $email = $_POST["email"];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Error: The email address is not valid.";
    exit(); 
  }
  $password = $_POST["password"];

  // $sql = "INSERT INTO users (firstname, lastname, email, password) 
  //         VALUES ('$first_name', '$last_name', '$email', '$password')";

  // mysqli_query($connection, $sql);

  //echo "User inserted successfully.";
  
  $mailCnt = [
    'name_from' => $conf['site_name'],
    'mail_from' => $conf['site_email'],
    'name_to' => "$first_name $last_name",
    'mail_to' => $email,
    'subject' => 'Welcome To Project Impossible! Account Verification',
    'body' => "
        Hello $first_name,<br><br>
        You requested an account on Project Impossible.<br>
        If you did not register for this you can ignore this message.<br>
        In order to use this account you need to <a href='{$conf['site_url']}index.php'>Click Here</a> to complete the registration process.<br><br>
        Regards,<br>
        Support Team.<br>
        Project Impossible.
    "
];

  // Send the email
  $SendMail = new SendMail();
  $result = $SendMail->Send_Mail($conf, $mailCnt);

  if($result){
    echo "Signup successful. Please check your email for verification.";
  } else {
    echo "Sign Up Failed";
  }
?>