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
<?php
    function validate_name($name) {

    }

    function validate_email($email) {

    }

    function validate_address($address) {

    }

    function validate_mobilePhone($phoneNumber) {

    }

    function validate_creditCard($cardNumber) {

    }

    function validate_expiryDate($expiryDate) {

    }
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
    <script src='js/checkout.js'></script>
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

<main id="main-background">
    <div class="middle-title">
      <h2>CHECKOUT</h2>
    </div>

    <form action="checkout.php" method="post">
        <div class="content-center">
            <div class="row">
                <div class="six columns">
                </div>
                <div class="six columns">
                    <label for="exampleEmailInput">Name</label>
                    <input class="u-full-width" type="text" name="name" required="required"/>
                </div>
                <div class="six columns">
                    <label for="exampleEmailInput">Email</label>
                    <input class="u-full-width" type="email" placeholder="test@mailbox.com" name="email" required="required"/>
                </div>
                <div class="six columns">
                    <label for="exampleEmailInput">Mobile Phone</label>
                    <input class="u-full-width" type="text" name="mobile_phone" required="required"/>
                </div>
                <div class="eight columns">
                    <label for="exampleEmailInput">Credit Card</label>
                    <input class="seventy-four-width" type="text" id="credit_card" name="credit_card" oninput="validate_cardNumber()" style="float:left" required="required"/>
                    <img src="images/visa.png" class="twenty-width" id="visaIcon" style="display:none" />
                </div>
                <div class="six columns">
                    <label for="exampleEmailInput">Expiry Date</label>
                    <input class="u-full-width" type="email" name="expiry_date" required="required"/>
                </div>
                <div class="six columns">
                    <label for="address">Address</label>
                    <textarea class="u-full-width" name="address" required="required"></textarea>
                </div>
                <div class="six columns">
                    <input class="button-primary" type="submit" value="submit">
                </div>
            </div>
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
