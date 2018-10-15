<!DOCTYPE html>
<?php
    include_once('tools.php');
    //error_reporting(0);
    session_start();
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
            // static $num = 0;
            // $num += 1;
            $id = $_POST['id']."_".$_POST['oid'];
            $_SESSION['cart'][$id]['id'] = $_POST['id'];
            $_SESSION['cart'][$id]['oid'] = $_POST['oid'];
            $_SESSION['cart'][$id]['qty'] = $_POST['qty'];
            $_SESSION['cart'][$id]['price'] = $_SESSION['products'][$_POST['id']]['Price'];
            $_SESSION['cart'][$id]['subtotal'] = number_format($_SESSION['cart'][$id]['price']*$_POST['qty'],2);
        }
    }
?>
<?php
    if(isset($_POST['cancel'])) {
        unset($_SESSION['cart']);
        header("Location: products.php");
    }
?>
<?php
    // echo '<h3> $_POST contains:</h3>';
    // preShow($_POST);
    // echo '<h3> $_SESSION contains:</h3>';
    // preShow($_SESSION);
?>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link id='skeleton' type="text/css" rel="stylesheet" href="css/skeleton.css">
    <script src='../wireframe.js'></script>
    <script src='js/cart.js'></script>
  </head>

  <body id="background">

    <header class="opacity">
        <div>
            <h2 class="brand_font"><img src="images/logo.png" width="70px" height="70px"/>Fantastic Makeup</h2>
        </div>
    </header>

<nav class="nav">
  <a href="products.php" target="_self"><span class="span">Products</span></a>  
  <a href="login.php" target="_self"><span class="span">Login</span></a>  
  <a href="index.php" target="_self"><span class="span">Profile</span></a>  
  <a href="cart.php" target="_self"><span class="span">Cart</span></a>  
  <a href="checkout.php" target="_self"><span class="span">Checkout</span></a>  
  <a href="receipt.php" target="_self"><span class="span">Receipt</span></a>  
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
                <?php
                    if (isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $cartItem){
                    echo 
                    '<tr>
                        <td>'.$_SESSION['products'][$cartItem['id']]['Title'].'&nbsp;'.$cartItem['oid'].'</td>
                        <td style="color:red">$'.$cartItem['price'].'</td>
                        <td>'.$cartItem['qty'].'</td>
                        <td style="color:red">$'.$cartItem['subtotal'].'</td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="button-center">
        <form method="post" action="checkout.php">
            <button class="button-primary" name="checkout">Checkout</button>
        </form>
        <form method="post" action="cart.php">
            <button class="button-primary" name="cancel">  Cancel  </button>
        </form>
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
