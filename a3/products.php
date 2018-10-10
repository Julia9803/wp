<!DOCTYPE html>
<?php
    include_once('tools.php');
    //error_reporting(0);
    session_start();
    // $_SESSION = "";
?>
<?php
    ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
    $products; $cells; $headings;
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
        while ( $cells = fgetcsv($fp, 0, "\t") ) { 
            for ($x=1; $x<count($cells); $x++) {
                if($headings[$x] == "Option" || $headings[$x] == "OID") {
                    $products[$cells[0]][$headings[$x]]= explode(" ",$cells[$x]);
                }else {
                    $products[$cells[0]][$headings[$x]]=$cells[$x];
                } 
            }
        } 
    } 
    $_SESSION['products'] = $products;
    fclose($fp);
?>
<?php
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6); box-shadow: 1px 1px 1px 2px navy;');
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
    <script src='js/product.js'></script>
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

    <?php
    function this_id_actually_exists($id) {
        // echo '<h3>'.$_SESSION['products'][$id]['OID'].'</h3>';
        // echo '<h3>'.count($_SESSION['products'][$id]).'</h3>';
        if(count($_SESSION['products'][$id]) != 0){
            return true;
        }else {
            return false;
        }
    }

    if(isset($_GET['id']) && this_id_actually_exists($_GET['id'])) {
        echo '
    <main>
        <article class="titles">
            <div class="col5">
                <img class="img-product" src="images/'.$_GET['id'].'.jpg">
                <!-- get this picture only for education use from https://www.sephora.com.au/ -->
            </div>
        
            <div class="col7">
                <form method="post" onsubmit="return check()"
                      action="cart.php">
                <div class="detail-display">
                    <h2>'.$_SESSION['products'][$_GET['id']]['Title'].'</h2>
                    <input type="hidden" name="id" value="'.$_GET['id'].'"/>
                     <p>'.$_SESSION['products'][$_GET['id']]['Description'].'</p>
                </div>
                <div class="detail-display">
                    <h2 class="price" id="price">$'.$_SESSION['products'][$_GET['id']]['Price'].'</h2>
                </div>
                 <div class="detail-display">
                     <label>OPTION</label>
                     <select name="oid">
                         <option value="'.$_SESSION['products'][$_GET['id']]['OID'][0].'">'.$_SESSION['products'][$_GET['id']]['Option'][0].'</option>
                         <option value="'.$_SESSION['products'][$_GET['id']]['OID'][1].'">'.$_SESSION['products'][$_GET['id']]['Option'][1].'</option>
                         <option value="'.$_SESSION['products'][$_GET['id']]['OID'][2].'">'.$_SESSION['products'][$_GET['id']]['Option'][2].'</option>
                     </select>
                    </div>
                    <div class="detail-display">
                        <label>QTY</label>
                        <input type="button" id="minus" value="-" onclick="clickMinus()">
                        <input id="qty" name="qty" type="text" value="1" oninput="changeSubtotal()">
                        <input type="button" id="plus" value="+" onclick="clickPlus()">
                    </div>
                    <div class="detail-display">
                        <label>SUBTOTAL</label>
                        <h3 class="price" id="subtotal">$'.$_SESSION['products'][$_GET['id']]['Price'].'</h3>
                    </div>
                    <div class="detail-display">
                        <button class="form-button" name="add" type="submit">ADD TO BAG</button>
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
                    <img class="img-style" src="images/M001.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>'.$products['M001']['Title'].'</h2>
                    <p>'.$products['M001']['Description'].'</p>
                    <p class="price">$ '.$products['M001']['Price']. '</p>
                    <a href="products.php?id=M001">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/M002.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>'.$products['M002']['Title'].'</h2>
                    <p>'.$products['M002']['Description'].'</p>
                    <p class="price">$ '.$products['M002']['Price'].'</p>
                    <a href="products.php?id=M002">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/M003.jpg">
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
                    <img class="img-style" src="images/M004.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>' .$products['M004']['Title'].'</h2>
                    <p>' .$products['M004']['Description'].'</p>
                    <p class="price">$ '.$products['M004']['Price'].'</p>
                    <a href="products.php?id=M004">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/M005.jpg">
                    <!-- get this picture only for education use from https://www.sephora.com.au/ -->
                    <h2>' .$products['M005']['Title'].'</h2>
                    <p>' .$products['M005']['Description'].'</p>
                    <p class="price">$ '.$products['M005']['Price'].'</p>
                    <a href="products.php?id=M005">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/M006.jpg">
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
      </script> Yubin Gao, s3739865,A3-s3739865.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
