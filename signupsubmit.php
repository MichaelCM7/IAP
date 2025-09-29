<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/IAP/styles/tables.css">
  <title>Sign Up Submit</title>
</head>
<body>
  <?php
  require "dbconnect.php";
  require_once __DIR__ . '../Plugins/PHPMailer/vendor/autoload.php';
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
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  //Insert Data in Maria DB
  $sql = "INSERT INTO users (firstname, lastname, email, password)".
           "VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";
  mysqli_query($connection, $sql);
  

  $sqldata = "SELECT * FROM users";
  $dbresult = mysqli_query($connection, $sqldata);


  echo "User inserted successfully.";

  //Mail client info
  $mailClient = [
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
  $result = $SendMail->Send_Mail($conf, $mailClient);

  if($result){
    echo "Signup successful. Please check your email for verification.";
  } else {
    echo "Sign Up Failed";
  }

  
?>
  <ol>
    <?php
      if ($dbresult->num_rows > 0) {
        while($row = $dbresult->fetch_assoc()) {
            echo "
            <li> <b>User ID</b>: " . $row["user_id"]." <b>First Name</b>: ".$row["firstname"].
            " <b>Last Name</b>: ". $row["lastname"]." <b>Email</b>: ".$row["email"]." <b>Registration Date</b>: "
            .$row["registration_date"]."</li>" ;
        }
      } else {
        echo "0 results";
      }
    ?>
  </ol>
</body>
</html>
