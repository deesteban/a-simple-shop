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

    <div class="dpContainer centerAlign">
      <img src="/src/coffeeR.jpg" style="width:100%">

    </div>
  <br><br>
  <div class="centerAlign">
      <h3 class="wideSpacing">Thank you for your order</h3>
<br>
      <?php
      //getting data from db
      $sql = "SELECT COUNT(*) FROM orders WHERE completed=0";

      $result = $conn->query($sql);
      //displaying data
      if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
              echo '<p class="opacitySetting"><i>There are currently '. $row["COUNT(*)"].' order(s) in front of you.';
          }
      }

      ?>


      <br> <br>
      <form method="get" action="/index.php">
      <button class="large primary">Return to Home.</button>
      </form>

  </div>
</body>
</html>
