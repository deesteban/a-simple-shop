<!doctype html>

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

  <?php
//connection to database
include "db_connect.php";
  ?>

</head>

<body>
  <header class="sticky" style="background-color: #63a192;color:white">
    <a href="/index.php" class="logo" style="color:white">CoffeeBuzz</a>
    <a href="/index.php" class="button" style="background-color: #63a192;color:white">Store</a>
    <a href="#" class="button" style="background-color: #63a192;color:white">Staff Login</a>

  </header>

</header>
<header class="sticky" style="background-color: #A9A9A9;color:white;height:45px;align-items: center">
  <a href="/addNewUser.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">Add new user</a>&nbsp
<a href="/usersOverview.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">View/Remove Users</a>
<a href="/dbOverview.php" class="button" style="background-color: #A9A9A9;color:white;font-size:12px">View Current Orders</a>


</header>

  <br><br>
  <div class="centerAlign">
      <h3 class="wideSpacing">Add new user</h3>
      <br>

      <div class="rowA">
      <div class="container">
      <form method="get" action="/addUserDB.php">

      <div class="rowA" style="margin:16px">


          <label for="fname"><i class="fa fa-user"></i> Username</label>
          <input type="text" id="fname"  required value="" name="uName" placeholder="JohnDoe12">
          <label for="email"><i class="fa fa-key"></i> Password</label>
          <input type="password" required id="email" name="pass" placeholder="password">


        </div>



      <label>
      <input type="submit" value="Add user" name="submit" class="btn">
      </form>
      </div>
      </div>



</body>
</html>
