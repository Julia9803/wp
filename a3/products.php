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
    $products;
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
        while ( $cells = fgetcsv($fp, 0, "\t") ) { 
            for ($x=1; $x<count($cells); $x++) {
                echo '<h3>'.$cells[$x].'</h3>';
                $products[$cells[0]][$headings[$x]]=$cells[$x]; 
            }
        } 
    } 
   fclose($fp);
   echo '<h3> $products contains:</h3>';
   preShow($products);
   $_SESSION['products'] = $products;
?>
<?php
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6); box-shadow: 1px 1px 1px 2px navy;');
?>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
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
        <section class="titles" id="main-background">
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic01.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>Marc Jacobs Beauty</h2>
                    <p>Re(marc)able Full Cover Foundation Concentrate</p>
                    <p class="price">$80.00</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic02.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>ZOEVA</h2>
                    <p>Screen Queen Highlighter Palette</p>
                    <p class="price">$25.00</p>
                    <a href="products.php?id=M001">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic03.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>Make Up For Ever</h2>
                    <p>Mist & Fix Setting Spray</p>
                    <p class="price">$19.00</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
        </section>
        <section class="titles" id="main-background">
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic04.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>ZOEVA</h2>
                    <p>Blush Palette</p>
                    <p class="price">$36.00</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic05.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>Anastasia Beverly Hills</h2>
                    <p>Soft Glam Eye Shadow Palette</p>
                    <p class="price">$75.00</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic06.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>IT Cosmetics</h2>
                    <p>Your Skin But Better CC Cream SPF 50+</p>
                    <p class="price">$61.00</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
        </section>
    </main>

    <footer class="footer">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yubin Gao, s3739865.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
