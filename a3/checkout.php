<!DOCTYPE html>
<?php
    include_once('tools.php');
    //error_reporting(0);
    session_start();
    echo '<h3> $_POST contains:</h3>';
    preShow($_POST);
    echo '<h3> $_SESSION contains:</h3>';
    preShow($_SESSION);
?>
<?php
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6); box-shadow: 1px 1px 1px 2px navy;');
?>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link id='skeleton' type="text/css" rel="stylesheet" href="css/skeleton.css">
    <link id='normalize' type="text/css" rel="stylesheet" href="css/normalize.css">
    <script src='../wireframe.js'></script>
  </head>

  <body id="background">

<header class="opacity">
  <div>
    <h3><img src="images/logo.png" width="70px" height="70px"/>Fantastic Makeup</h3>
    </div>
</header>

<nav>
  <a href="products.php" target="_self">Products</a> |
  <a href="product.php" target="_self">Product</a> |
  <a href="login.php" target="_self">Login</a> | 
  <a href="index.php" target="_self">Profile</a> | 
  <a href="cart.php" target="_self">Cart</a> |
  <a href="checkout.php" target="_self">Checkout</a> |
  <a href="reciept.php" target="_self">Reciept</a> |
</nav>

<main>
    <div class="middle-title">
      <h2>YOUR BAG</h2>
    </div>

    <form action="checkout" method="post">
        <div class="row">
            <div class="six columns">
                <label for="exampleEmailInput">Name</label>
                <input class="u-full-width" type="text" name="name">
            </div>
            <div class="six columns">
                <label for="exampleEmailInput">Email</label>
                <input class="u-full-width" type="email" placeholder="test@mailbox.com" name="email">
            </div>
            <div class="six columns">
                <label for="exampleEmailInput">Mobile Phone</label>
                <input class="u-full-width" type="text" name="mobile_phone">
            </div>
            <div class="six columns">
                <label for="exampleEmailInput">Credit Card</label>
                <input class="u-full-width" type="text" name="credit_card">
            </div>
            <div class="six columns">
                <label for="exampleEmailInput">Expiry Date</label>
                <input class="u-full-width" type="email" name="expiry_date">
            </div>
            <label for="address">Address</label>
            <textarea class="u-full-width" name="address"></textarea>
            <input type="submit" value="submit">
        </div>
    </form>
    
</main>

    <footer class="footer">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yubin Gao, s3739865,A3-s3739865.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
   
  </body>
</html>