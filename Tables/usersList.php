<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/IAP/css/tables.css">
  <title>User List</title>
</head>
<body>
  <?php
  require "../dbconnect.php";
  $sqldata = "SELECT * FROM users";
  $dbresult = mysqli_query($connection, $sqldata);
  ?>

  <table>
    <tr>
      <td>User ID</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Email</td>
      <td>Registration Date</td>
    </tr>
    <?php
      if ($dbresult->num_rows > 0) {
        while($row = $dbresult->fetch_assoc()) {
            echo "
            <tr>
            <td>" . $row["user_id"]."</td>".
            "<td>".$row["firstname"]."</td>".
            "<td>". $row["lastname"]."</td>".
            "<td>".$row["email"]."</td>".
            "<td>".$row["registration_date"]."</td>
            </tr>" ;
        }
      } else {
        echo "0 results";
      }
    ?>
  </table>
</body>
</html>

