<html>
<?php
include "db_connect.php";


$new_userName= addslashes($_GET["uname"]);
$new_userPass= addslashes($_GET["psw"]);

$sql="SELECT * FROM `users` WHERE `userName` LIKE '$new_userName'";
$result = $conn->query($sql) or die(mysqli_error($conn));
$rowProduct=$result->fetch_assoc();
$dbHash=$rowProduct["psw"];

if (password_verify($new_userPass, $dbHash)) {
  session_start();
  $_SESSION["authenticated"] = 'true';
  header('Location: http://localhost/dbOverview.php');
  exit;
}
else {
  header('Location: http://localhost/loginPage.php');
  exit;
}

?>

</html>
