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
</header>
<header class="sticky" style="background-color: #A9A9A9;color:white;height:45px;align-items: center">
  <a href="/addNewUser.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">Add new user</a>&nbsp
<a href="/usersOverview.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">View/Remove Users</a>
<a href="/dbOverview.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">View Current Orders</a>


</header>


  <table>
    <br><br>
    <caption>Current Users</caption>
    <thead>
      <tr>
        <th>Name</th>
        <th>Delete User</th>
      </tr>
    </thead>
    <tbody>


      <?php
    //connection to database
    include "db_connect.php";

    $sql = "SELECT * FROM `users`";

    $result = $conn->query($sql);
    //displaying data
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td data-label="Name">'.$row["userName"].'</td>';
            echo'<td data-label="Complete Order"><button class="secondary" id="'.$row["userID"].'" onclick="completeOrder(this.id)">Delete User</button></td>';
            echo "</tr>";
          }}
              $conn->close();
            ?>
    </tbody>
  </table>


  <script>
function completeOrder(clicked_id){
  var id=clicked_id;
  window.location.href="deleteUserDB.php?targetID="+id;
}
  </script>



</body>

</html>
