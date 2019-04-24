<html>

<?php
//including connection to database
include "db_connect.php";

//getting values from form into local variables
$new_ID= addslashes($_GET["targetID"]);
//formulating sql insert into table
$sql="DELETE FROM `users` WHERE `users`.`userID` = $new_ID";

$result = $conn->query($sql) or die(mysqli_error($conn));
$conn->close();
//redirect to main page
header('Location: http://localhost/dbOverview.php');
exit;
 ?>

 </html>
