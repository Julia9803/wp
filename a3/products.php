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
    ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
    $products; $cells; $headings;
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
        while ( $cells = fgetcsv($fp, 0, "\t") ) { 
            for ($x=1; $x<count($cells); $x++) {
                $products[$cells[0]][$headings[$x]]=$cells[$x]; 
            }
        } 
    } 
    // echo '<h3> $products contains:</h3>';
    // preShow($products);
    $_SESSION['products'] = $products;
    fclose($fp);
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
    <script src='js/product.js'></script>
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

    <?php
    function this_id_actually_exists($id) {
        echo '<h3>'.$id.'</h3>';
        echo '<h3>this_id_actually_exists:'.isset($products[$id]['OID']).'</h3>';
        return isset($products[$id]['OID']);
    }

    if(isset($_GET['id']) && this_id_actually_exists($_GET['id'])) {
        echo '
    <main>
        <article class="titles">
            <div class="col5">
                <img class="img-product" src="images/pic01.jpg">
                <!-- get this picture only for education use from https://www.sephora.com.au/ -->
            </div>
        
            <div class="col7">
                <form method="post" onsubmit="return check()"
                      action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
                <div class="detail-display">
                    <h2>Marc Jacobs Beauty</h2>
                    <input type="hidden" name="id" value="001"/>
                     <p>Re(marc)able Full Cover Foundation Concentrate</p>
                </div>
                <div class="detail-display">
                    <h2 class="price">$80.00</h2>
                </div>
                 <div class="detail-display">
                     <label>COLOR</label>
                     <select name="option">
                         <option value="Ivory">Ivory</option>
                         <option value="Bisque">Bisque</option>
                         <option value="Beige">Beige</option>
                         <option value="Golden">Golden</option>
                         <option value="Honey">Honey</option>
                         <option value="Cocoa">Cocoa</option>
                     </select>
                    </div>
                    <div class="detail-display">
                        <label>QTY</label>
                        <input type="button" id="minus" value="-" onclick="clickMinus()">
                        <input id="qty" name="qty" type="text" value="1">
                        <input type="button" id="plus" value="+" onclick="clickPlus()">
                    </div>
                    <div class="detail-display">
                        <button class="form-button" type="submit">ADD TO BAG</button>
                    </div>
                </form>
                <br/>
                <br/>
            </div>
        </article>
    </main>';
    } else {
        echo '<main>
        <section class="titles" id="main-background">
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic01.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>'.$products['M001']['Title'].'</h2>
                    <p>'.$products['M001']['Description'].'</p>
                    <p class="price">$ '.$products['M001']['Price']. '</p>
                    <a href="products.php?id=M001">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic02.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>'.$products['M002']['Title'].'</h2>
                    <p>'.$products['M002']['Description'].'</p>
                    <p class="price">$ '.$products['M002']['Price'].'</p>
                    <a href="products.php?id=M002">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic03.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>'.$products['M003']['Title'].'</h2>
                    <p>'.$products['M003']['Description'].'</p>
                    <p class="price">$ '.$products['M003']['Price'].'</p>
                    <a href="products.php?id=M003">see more...</a>
                </span>
            </article>
        </section>
        <section class="titles" id="main-background">
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic04.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>' .$products['M004']['Title'].'</h2>
                    <p>' .$products['M004']['Description'].'</p>
                    <p class="price">$ '.$products['M004']['Price'].'</p>
                    <a href="products.php?id=M004">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic05.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>' .$products['M005']['Title'].'</h2>
                    <p>' .$products['M005']['Description'].'</p>
                    <p class="price">$ '.$products['M005']['Price'].'</p>
                    <a href="products.php?id=M005">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic06.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>' .$products['M006']['Title'].'</h2>
                    <p>' .$products['M006']['Description'].'</p>
                    <p class="price">$ '.$products['M006']['Price'].'</p>
                    <a href="products.php?id=M006">see more...</a>
                </span>
            </article>
        </section>
    </main>';
    }
    ?>

    <footer class="footer">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yubin Gao, s3739865.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
