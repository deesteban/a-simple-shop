<html>

<?php
//including connection to database
include "db_connect.php";

//getting values from form into local variables
$new_userName= addslashes($_GET["uName"]);
$new_uPass=addslashes($_GET["pass"]);
$hash = password_hash($new_uPass, PASSWORD_DEFAULT);
//formulating sql insert into table
$sql="INSERT INTO `users` (`userID`, `userName`, `psw`) VALUES (NULL, '$new_userName', '$hash')";

$result = $conn->query($sql) or die(mysqli_error($conn));
$conn->close();
//redirect to main page
header('Location: http://localhost/dbOverview.php');
exit;
 ?>

 </html>
