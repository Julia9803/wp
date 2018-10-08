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
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6); box-shadow: 1px 1px 1px 2px black; padding: 1px');
?>
<?php
    function check_oid() {
        if(strlen($_POST['oid']) != 0){
            return true;
        } else {
            return false;
        }
    }

    function check_option() {
        if($_SESSION['products'][$_POST['id']]['OID'] = $_POST['oid']) {
            return true;
        } else {
            return false;
        }
    }
?>
<?php
    if(isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
        if(check_oid() && check_option()) {
            $_SESSION['cart'][$_POST['id']]['oid'] = $_POST['oid'];
            $_SESSION['cart'][$_POST['id']]['qty'] = $_POST['qty'];
            echo '<h3> $_SESSION contains:</h3>';
            preShow($_SESSION);
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
  </head>

  <body id="background">

    <header class="opacity">
        <div>
            <h3><img src="images/logo.png" width="70px" height="70px"/>Fantastic Makeup</h3>
        </div>
    </header>

<nav class="nav">
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
      <h2>YOUR BAG</h2>
    </div>
    <div class="table">
        <table class="u-full-width">
            <thead>
                <tr>
                    <th>Product details</th>
                    <th>Item price</th>
                    <th>QTY</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TOLITO COLLECTION</td>
                    <td>$119.95</td>
                    <td>1</td>
                    <td>$119.95</td>
                </tr>
                <tr>
                    <td>TOLITO COLLECTION</td>
                    <td>$119.95</td>
                    <td>1</td>
                    <td>$119.95</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="button-center">
        <button class="button-primary">Checkout</button>
    </div>
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
