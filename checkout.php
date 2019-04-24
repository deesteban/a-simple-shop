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
  <br><br>
  <div class="centerAlign">
      <h3 class="wideSpacing">Store Checkout</h3>
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
  </div>

  <br> <br>



              <div class="rowA">
        <div class="col-75">
          <div class="container">
            <form method="post"  onsubmit="return saveItemNum();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

              <div class="rowA">
                <div class="column50">
                  <?php $new_orderDescSave=addslashes($_GET["size"]) ?>

                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <?php $new_userName=addslashes($_GET["userName"]);
                  echo '<input type="text" id="fname"  value='.$new_userName.' name="firstname" required placeholder="John M. Doe">';
                  ?>
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" required placeholder="john@example.com">

                  <br>
                  <h3>Your Order</h3>
                  <ul>
                      <?php

                        $new_orderDesc=addslashes($_GET["size"]);


                       $sql2 = "SELECT * FROM `coffee`.`products` WHERE `productID` = $new_orderDesc";

                        $result2 = $conn->query($sql2);
                       $rowProduct=$result2->fetch_assoc();

                        echo '<li style="font-size: 17px;font-style: normal">'.$rowProduct["productDesc"].' x1 = A$'.$rowProduct["price"].'</li>';


                       ?>


                  </ul>


                </div>



                <?php
                $new_paymentType=addslashes($_GET["paymentType"]);
                if ($new_paymentType == 0) {

                } else {
                echo '
                <div class="column50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    &nbsp&nbsp<i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" required name="cardname" placeholder="John More Doe">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" required name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" required name="expmonth" placeholder="September">
                  <div class="rowA">
                    <div class="column50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" required name="expyear" placeholder="2018">
                    </div>
                    <div class="column50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" required name="cvv" placeholder="352">
                    </div>
                  </div>
                </div>

            ';  }
              ?>



              </div>
              <label>
              <input type="submit" value="Pay" name="submit" class="btn">
            </form>
          </div>
        </div>
      </div>



</body>

<script>
// Check browser support
function saveItemNum(){
  var itemNum=<?php echo $new_orderDescSave ?>;
  var paymentType=<?php echo $new_paymentType ?>;
  var fname=document.getElementById('fname').value;

  // Store
  window.location.href="add_order.php?size="+itemNum+"&userName="+fname+"&paymentType="+paymentType;
  return false;
}
</script>


</html>
