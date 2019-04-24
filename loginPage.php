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



<body>

<header class="sticky" style="background-color: #63a192;color:white">
  <a href="/index.php" class="logo" style="color:white">CoffeeBuzz</a>
  <a href="/index.php" class="button" style="background-color: #63a192;color:white">Store</a>
  <a href="/loginPage.php" class="button" style="background-color: #63a192;color:white">Staff Login</a>

</header>

  <div class="container centerAlign contentBox padding64px" style="max-width:800px">

    <form action="/PDOConfig.php">
      <div class="imgcontainer">
        <img src="src/person.png" style="max-width:150px" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" required name="uname" style="max-width:280px" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" required id="ePass" name="psw" required>

        <button type="submit">Login</button>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>

  </div>


</body>

</html>
