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

</head>
<script>

window.onload = function(){
var modal1 = document.getElementById('modal1');
var modal2 = document.getElementById('modal2');
var modal3 = document.getElementById('modal3');
var modal4 = document.getElementById('modal4');
var modal5 = document.getElementById('modal5');
var modal6 = document.getElementById('modal6');
var modal7 = document.getElementById('modal7');
var modal8 = document.getElementById('modal8');
var modal9 = document.getElementById('modal9');

// When the user clicks anywhere outside of the modal, close it
var span1 = document.getElementById('close1');
span1.onclick = function(){
modal1.style.display = "none";
}

var span2 = document.getElementById('close2');
span2.onclick = function(){
modal2.style.display = "none";
}

var span3 = document.getElementById('close3');
span3.onclick = function(){
modal3.style.display = "none";
}

var span4 = document.getElementById('close4');
span4.onclick = function(){
modal4.style.display = "none";
}

var span5 = document.getElementById('close5');
span5.onclick = function(){
modal5.style.display = "none";
}

var span6 = document.getElementById('close6');
span6.onclick = function(){
modal6.style.display = "none";
}

var span7 = document.getElementById('close7');
span7.onclick = function(){
modal7.style.display = "none";
}

var span8 = document.getElementById('close8');
span8.onclick = function(){
modal8.style.display = "none";
}

var span9 = document.getElementById('close9');
span9.onclick = function(){
modal9.style.display = "none";
}







  window.onclick = function(event) {
  if (event.target == modal1) {
      modal1.style.display = "none";
      }

      if (event.target == modal2) {
          modal2.style.display = "none";
          }

          if (event.target == modal3) {
              modal3.style.display = "none";
              }
              if (event.target == modal4) {
                  modal4.style.display = "none";
                  }

                  if (event.target == modal5) {
                      modal5.style.display = "none";
                      }

                      if (event.target == modal6) {
                          modal6.style.display = "none";
                          }

                          if (event.target == modal7) {
                              modal7.style.display = "none";
                              }

                              if (event.target == modal8) {
                                  modal8.style.display = "none";
                                  }

                                  if (event.target == modal9) {
                                      modal9.style.display = "none";
                                      }



    }
  }




</script>






<body>

  <header class="sticky" style="background-color: #63a192;color:white">
    <a href="/index.php" class="logo" style="color:white">CoffeeBuzz</a>
    <a href="/index.php" class="button" style="background-color: #63a192;color:white">Store</a>
    <a href="/loginPage.php" class="button" style="background-color: #63a192;color:white">Staff Login</a>

  </header>









  <div class="dpContainer centerAlign">
    <img src="/src/coffeefront.jpg" style="width:100%">

  </div>

  <!-- The Band Section -->
  <div class="container contentBox centerAlign padding64px" style="max-width:800px">
    <h1 class="wideSpacing">CoffeeBuzz</h1>
    <p class="opacitySetting"><i>The best coffee in town, period.</i></p>
    <p class="justifyText">
      <br>

With over a decade in the game of sourcing, roasting & brewing coffee, 2019 marked a statement of intent for us. A statement to make sure that people growing exceptional coffee are still doing so in ten years time. It is our passion and drive to make sure every drop of coffee is responsibly sourced, treated and served with with dignity to every customer. CoffeeBuzz aims to provide a new tactile experience to every customer that shall make a lasting impression to all of their senses.


    </p>
    <br><br><br><br>
    <h3 class="wideSpacing">Online Ordering</h3>
    <p class="opacitySetting"><i>Order your coffee online to skip the queues and save time.</i></p>
  </div>

  <div style="background-color: #5c4c4f">
    <div class="container contentBox padding64px" style="max-width:800px">

      <div class="splitBox2 bottomMargin" id="regCoffee">
       <img src="/src/coffee.jpg" alt="regularCoffee" style="width:100%" >
       <div class="container whiteBox">
         <p><b>Coffee</b></p>
         <p class="opacitySetting">A$3.95</p>
         <p>Delicious fresh coffee prepared by our baristas. S, M and L sizes available.</p>
         <button onclick="document.getElementById('modal1').style.display='block'">Purchase</button>
       </div>
     </div>

     <div class="splitBox2 bottomMargin" id="latte">
      <img src="/src/latte.jpg" alt="latte" style="width:100%">
      <div class="container whiteBox">
        <p><b>Latte</b></p>
        <p class="opacitySetting">A$4.49</p>
        <p>Coffee made with espresso and hot steamed milk, milkier than a cappuccino.</p>
        <button onclick="document.getElementById('modal2').style.display='block'">Purchase</button>
      </div>
     </div>

     <div class="splitBox2 bottomMargin" id="espresso">
      <img src="/src/espresso.jpg" alt="espresso" style="width:100%">
      <div class="container whiteBox">
        <p><b>Espresso</b></p>
        <p class="opacitySetting">A$3.19</p>
        <p>Strong black coffee made by forcing steam through ground coffee beans.</p>
        <button onclick="document.getElementById('modal3').style.display='block'">Purchase</button>
      </div>
    </div>

    <div class="splitBox2 bottomMargin" id="cappuccino">
     <img src="/src/cappuccino.png" alt="cappuccino" style="width:100%">
     <div class="container whiteBox">
       <p><b>Cappuccino</b></p>
       <p class="opacitySetting">A$3.79</p>
       <p>Coffee made with espresso and milk with steam.</p>
       <button onclick="document.getElementById('modal4').style.display='block'">Purchase</button>
     </div>
   </div>

   <div class="splitBox2 bottomMargin" id="longBlack">
    <img src="/src/longBlack.jpg" alt="longBlack" style="width:100%">
    <div class="container whiteBox">
      <p><b>Long Black</b></p>
      <p class="opacitySetting">A$4.29</p>
      <p>Coffee made by adding a shot of espresso to hot water.</p>
      <button onclick="document.getElementById('modal5').style.display='block'">Purchase</button>
    </div>
   </div>

   <div class="splitBox2 bottomMargin" id="hotChocolate">
    <img src="/src/hotChocolate.jpg" alt="hotChocolate" style="width:100%">
    <div class="container whiteBox">
      <p><b>Hot Chocolate</b></p>
      <p class="opacitySetting">A$3.89</p>
      <p>Our best cocoa blended to create an iconic drink.</p>
      <button onclick="document.getElementById('modal6').style.display='block'">Purchase</button>
    </div>
  </div>

  <div class="splitBox2 bottomMargin" id="tea">
   <img src="/src/tea.jpg" alt="tea" style="width:100%">
   <div class="container whiteBox">
     <p><b>Teas</b></p>
     <p class="opacitySetting">A$4.19</p>
     <p>Pick from a selection of our fresh import and local teas.</p>
     <button onclick="document.getElementById('modal7').style.display='block'">Purchase</button>
   </div>
 </div>

 <div class="splitBox2 bottomMargin" id="cakes">
  <img src="/src/cake.jpg" alt="cakes" style="width:100%">
  <div class="container whiteBox">
    <p><b>Cakes</b></p>
    <p class="opacitySetting">A$5.79</p>
    <p>If you're feeling hungry, check out our sweetest products.</p>
    <button onclick="document.getElementById('modal8').style.display='block'">Purchase</button>
  </div>
 </div>

 <div class="splitBox2 bottomMargin" id="sandwich">
  <img src="/src/sandwich.jpg" alt="sandwich" style="width:100%">
  <div class="container whiteBox">
    <p><b>Sandwiches</b></p>
    <p class="opacitySetting">A$5.49</p>
    <p>Enjoy a delicious while you consume your drink.</p>
    <button onclick="document.getElementById('modal9').style.display='block'">Purchase</button>
  </div>
</div>







</div>
</div>


<div id="modal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close1">&times;</span>
            <h2>&nbsp;Coffee&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/coffee.jpg" alt="coffee" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Coffee</H3>
            <p>Available in Small, Medium and Large Sizes.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="1">Small - A$3.95</option>
                <option value="2">Medium - A$4.25</option>
                <option value="3">Large - A$4.75</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close2">&times;</span>
            <h2>&nbsp;Latte&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/latte.jpg" alt="latte" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Latte</H3>
            <p>Available only in Large Size.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="4">Large - A$4.49</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal3" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close3">&times;</span>
            <h2>&nbsp;Espresso&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/espresso.jpg" alt="espresso" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Espresso</H3>
            <p>Available in Espresso and Double Espresso.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="5">Espresso - A$3.19</option>
                <option value="6">Double Espresso - A$4.29</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal4" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close4">&times;</span>
            <h2>&nbsp;Cappuccino&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/cappuccino.png" alt="cappuccino" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Cappuccino</H3>
            <p>Available in Medium and Large Sizes.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="7">Medium - A$3.79</option>
                <option value="8">Large - A$4.79</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal5" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close5">&times;</span>
            <h2>&nbsp;Long Black&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/longBlack.jpg" alt="longBlack" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Long Black</H3>
            <p>Available in Medium and Large Sizes.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="9">Medium - A$4.29</option>
                <option value="10">Large - A$5.39</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal6" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close6">&times;</span>
            <h2>&nbsp;Hot Chocolate&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/hotChocolate.jpg" alt="hotChocolate" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Hot Chocolate</H3>
            <p>Available in Medium and Large Sizes.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>

                <option value="11">Medium - A$3.89</option>
                <option value="12">Large - A$4.89</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal7" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close7">&times;</span>
            <h2>&nbsp;Tea&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/tea.jpg" alt="tea" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Tea</H3>
            <p>Pick from Earl Grey, Assam, Green and Mint Tea, all available in Medium and Large Sizes.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="13">Earl Grey Medium - A$4.19</option>
                <option value="14">Earl Grey Large - A$5.29</option>
                <option value="15">Assam Tea Medium - A$4.89</option>
                <option value="16">Assam Tea Large - A$5.79</option>
                <option value="17">Green Tea Medium - A$4.49</option>
                <option value="18">Green Tea Large - A$5.89</option>
                <option value="19">Mint Tea Medium - A$4.19</option>
                <option value="20">Mint Tea Large - A$5.79</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal8" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close8">&times;</span>
            <h2>&nbsp;Cakes&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/cake.jpg" alt="cake" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Cakes</H3>
            <p>Currently we offer our special Strawberry Cake with cream frosting.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="21">Strawberry Cake (Portion)- A$5.79</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>

<div id="modal9" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close9">&times;</span>
            <h2>&nbsp;Sandwiches&nbsp;&nbsp;</h2>
        </div>
        <div class="modal-body centerAlign">
            <H3><img src="./src/sandwich.jpg" alt="sandwich" width="100" height="80">&nbsp;&nbsp;&nbsp;&nbsp;Sandwiches</H3>
            <p>Enjoy our famous Smoky BLT with cured Bacon, freshly grown organic tomatos and crisp Iceberg letucce.</p>
            <form action="checkout.php">
              Please enter your name:<br>
              <input type="text" name="userName" required>
              <br>Please pick your size:<br>
              <select class="select-css" name="size" required>
                <option value="" selected="selected"></option>
                <option value="22">Smoky BLT - A$5.49</option>
              </select><br>
              Please enter your payment type:<br>
              <select class="select-css" name="paymentType" required>
                <option value="" selected="selected"></option>
                <option value="0">Cash</option>
                <option value="1">Debit / Credit Card</option>
              </select><br>
              <input type="submit" value="Checkout">
            </form>

              </div>
    </div>
</div>





<!-- Footer -->
<footer class="container padding64px centerAlign opacitySetting GrayColor largeFont">
  <i class="fa fa-facebook-official"></i>
  <i class="fa fa-instagram"></i>
  <i class="fa fa-snapchat"></i>
  <i class="fa fa-pinterest-p "></i>
  <i class="fa fa-twitter"></i>
  <i class="fa fa-linkedin"></i>
  <p class="15pxFont">CoffeeBuzz ©2019</a></p>
</footer>





</body>

</html>
