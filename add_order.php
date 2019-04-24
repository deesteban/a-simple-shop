<html>

<?php
//including connection to database
include "db_connect.php";

//getting values from form into local variables
$new_userName= addslashes($_GET["userName"]);
$new_orderDesc=addslashes($_GET["size"]);
$new_paymentType=addslashes($_GET["paymentType"]);
//formulating sql insert into table
$sql="INSERT INTO `orders` (`orderID`, `orderDesc`, `userName`, `paymentType`) VALUES (NULL, '$new_orderDesc', '$new_userName', '$new_paymentType')";
$result = $conn->query($sql) or die(mysqli_error($conn));
//redirect to main page
header('Location: http://localhost/orderComplete.php');
exit;
 ?>

 </html>
