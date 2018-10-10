<!DOCTYPE html>
<?php
    include_once('tools.php');
    //error_reporting(0);
    session_start();
    $_SESSION = "";
?>
<?php
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6); box-shadow: 1px 1px 1px 2px navy;');
?>
<?php
    echo '<h3> $_POST contains:</h3>';
    preShow($_POST);
    echo '<h3> $_SESSION contains:</h3>';
    preShow($_SESSION);
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
  <a href="login.php" target="_self">Login</a> | 
  <a href="index.php" target="_self">Profile</a> | 
  <a href="cart.php" target="_self">Cart</a> |
  <a href="checkout.php" target="_self">Checkout</a> |
  <a href="receipt.php" target="_self">Receipt</a> |
</nav>

<main>
    <div class="author-banner"></div>
    <div class="author">
        <div class="author-head">
           <img class="author-avatar" src="images/mypic.png" width="90px" height="90px" /> 
        </div>
        <h2>Julia</h2>
        <p>The end is always near.</p>
        <form class="form"
                    method= "post"
                    action="">
    
                  <div class="form-group">
                      <label>Username:</label>
                      <input id="username" class="form-input" type="text" value="julia9803" name="username" disabled="disabled"  required/>
                  </div>
                  <div class="form-group">
                      <label>Background:</label>
                      <input id="username" class="form-input" type="text" value="university student" name="background" disabled="disabled"  required/>
                  </div>
                  <div class="form-group">
                      <label>Hobby:</label>
                      <input id="hobby" class="form-input" type="text" value="shopping" name="hobby" disabled="disabled" required/>
                  </div>
                  <div class="form-group">
                      <label>Focus:</label>
                      <input id="focus" class="form-input" type="text" value="lipstick and eyeshadow" name="focus" disabled="disabled" required/>
                  </div>
              </form>
    </div>
    <div class="history">
        <div class="detail-display">
            <h3>History</h3>
        </div>
        <div class="titles">
        <br/>
        <img class="history-img" src="images/M001.jpg" width="200px" height="200px">
        <img class="history-img" src="images/M002.jpg" width="200px" height="200px">
        <img class="history-img" src="images/M003.jpg" width="200px" height="200px">
        <img class="history-img" src="images/M004.jpg" width="200px" height="200px">
        <img class="history-img" src="images/M005.jpg" width="200px" height="200px">
        <img class="history-img" src="images/M006.jpg" width="200px" height="200px">
        </div>
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
