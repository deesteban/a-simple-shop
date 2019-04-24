<!doctype html>
<?php
session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
  header('Location: http://localhost/loginPage.php');
  exit;
}

 ?>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="10" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeBuzz</title>
  <meta name="description" content="The best coffee in town.">
  <meta name="author" content="Jaime de Esteban">
  <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">
  <link rel="stylesheet" href="myStyle.css?v=<?=time();?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



  <header class="sticky" style="background-color: #63a192;color:white">
    <a href="/index.php" class="logo" style="color:white">CoffeeBuzz</a>
    <a href="/index.php" class="button" style="background-color: #63a192;color:white">Store</a>
    <a href="/loginPage.php" class="button" style="background-color: #63a192;color:white">Staff Login</a>


  </header>
  <header class="sticky" style="background-color: #A9A9A9;color:white;height:45px;align-items: center">
    <a href="/addNewUser.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">Add new user</a>&nbsp
  <a href="/usersOverview.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">View/Remove Users</a>
  <a href="/dbOverview.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">View Current Orders</a>


  </header>


  <table>
    <br><br>
    <caption>Current Orders</caption>
    <thead>
      <tr>
        <th>Name</th>
        <th>Order</th>
        <th>Payment</th>
        <th>Price</th>
        <th>Complete Order</th>
      </tr>
    </thead>
    <tbody>


      <?php
    //connection to database
    include "db_connect.php";

    $sql = "SELECT * FROM `orders` WHERE completed=0 ORDER BY `orderID` DESC";




    $result = $conn->query($sql);
    //displaying data
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td data-label="Name">'.$row["userName"].'</td>';
            $productNumber=$row["orderDesc"];
            $sql2 = "SELECT * FROM `coffee`.`products` WHERE `productID` = $productNumber";
            $result2 = $conn->query($sql2) or die(mysqli_error($conn));
            $rowProduct=$result2->fetch_assoc();
            echo '<td data-label="Order">'.$rowProduct["productDesc"].'</td>';
            $variable1= $row["paymentType"];
            switch ($variable1) {
              case 0:
                echo '<td data-label="Payment">Cash</td>';
                break;
              case 1:
                echo '<td data-label="Payment">Credit/Debit Card</td>';
                break;
              default:
                echo '<td data-label="Payment">'.$row["paymentType"].'</td>';
                break;
            }
            echo '<td data-label="Price">A$'.$rowProduct["price"].'</td>';
            echo'<td data-label="Complete Order"><button class="primary" id="'.$row["orderID"].'" onclick="completeOrder(this.id)">Finish</button></td>';
            echo "</tr>";
          }}
              $conn->close();
            ?>
    </tbody>
  </table>


  <script>
function completeOrder(clicked_id){
  var id=clicked_id;
  window.location.href="updateDB.php?targetID="+id;
}
  </script>



</body>

</html>
