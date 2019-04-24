<html>

<?php
//including connection to database
include "db_connect.php";

//getting values from form into local variables
$new_targetID= addslashes($_GET["targetID"]);

//formulating sql insert into table
$updateSql="UPDATE `orders` SET `completed` = '1' WHERE `orders`.`orderID` = $new_targetID";
$result = $conn->query($updateSql) or die(mysqli_error($conn));
//redirect to main page
header('Location: http://localhost/dbOverview.php');
exit;
 ?>

 </html>
