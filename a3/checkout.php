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
    global $name_error;
    global $address_error;
    global $mobile_error;
    global $email_error;
    global $card_error;
    global $date_error;

    if(isset($_POST['submit'])) {
        echo "<h3>isset submit</h3>";
        if(validate_name($_POST['name']) &&
        validate_address($_POST['address']) &&
        validate_mobilePhone($_POST['mobile_phone']) &&
        validate_email($_POST['email']) &&
        validate_creditCard($_POST['credit_card']) &&
        validate_expiryDate($_POST['expiry_date'])
        ) {
            saveFile();
            header("Location: receipt.php");
        }else {
            $_SESSION['user'] = "";
            echo '<h3>name_error</h3>';
            preShow($name_error);
        }
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
  <a href="login.php" target="_self">Login</a> | 
  <a href="index.php" target="_self">Profile</a> | 
  <a href="cart.php" target="_self">Cart</a> |
  <a href="checkout.php" target="_self">Checkout</a> |
  <a href="receipt.php" target="_self">Receipt</a> |
</nav>

<main id="main-background">
    <div class="middle-title">
      <h2>CHECKOUT</h2>
    </div>

    <form action="checkout.php" method="post">
        <div class="content-center">
            <div class="row">
                <div class="eight columns">
                </div>
                <div class="eight columns">
                    <label for="exampleEmailInput">Name</label>
                    <input class="seventy-four-width" type="text" name="name" style="float:left;" required="required"/>
                    <?php echo $name_error; ?>
                </div>
                <div class="eight columns">
                    <label for="exampleEmailInput">Email</label>
                    <input class="seventy-four-width" type="email" placeholder="test@mailbox.com" name="email" style="float:left;" required="required"/>
                    <?php echo $email_error; ?>
                </div>
                <div class="eight columns">
                    <label for="exampleEmailInput">Mobile Phone</label>
                    <input class="seventy-four-width" type="text" name="mobile_phone" style="float:left;" required="required"/>
                    <?php echo $mobile_error; ?>
                </div>
                <div class="eight columns">
                    <label for="exampleEmailInput">Credit Card</label>
                    <input class="seventy-four-width" type="text" id="credit_card" name="credit_card" oninput="validate_cardNumber()" style="float:left;" required="required"/>
                    <img src="images/visa.png" class="twenty-width" id="visaIcon" style="display:none" />
                    <?php echo $card_error; ?>
                </div>
                <div class="eight columns">
                    <label for="exampleEmailInput">Expiry Date</label>
                    <input class="seventy-four-width" type="date" name="expiry_date" style="float:left;" required="required"/>
                    <?php echo $date_error; ?>
                </div>
                <div class="eight columns">
                    <label for="address">Address</label>
                    <textarea class="seventy-four-width" name="address" style="float:left;" required="required"></textarea>
                    <?php echo $address_error; ?>
                </div>
                <div class="eight columns">
                    <input class="button-primary" type="submit" name="submit" value="submit">
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
