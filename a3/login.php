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
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      <script src="js/login.js"></script>
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
        <a href="login.php" target="_self">Login</a> | 
        <a href="index.php" target="_self">Profile</a> | 
        <a href="cart.php" target="_self">Cart</a> |
        <a href="checkout.php" target="_self">Checkout</a> |
        <a href="receipt.php" target="_self">Receipt</a> |
    </nav>

      
      <main id="main-background">
          <div class="login">
              <div class="login-content">
                  <div class="login-logo">
                      <img src="images/logo.png" width="150px" height="170px"/><br/>
                      <h2>The Fantastic</h2>
                  </div>
                  <form class="form"
                        method= "post"
                        action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
        
                      <div class="form-group">
                          <label>Email:</label>
                          <input id="email" class="form-input" type="email" placeholder="Please input username." name="email" onChange="usernameChnage()" required/>
                      </div>
                      <div class="form-group">
                          <label>Password:</label>
                          <input id="password" class="form-input" type="password" placeholder="Please input password." name="password" onChange="passwordChange()" required/>
                      </div>
                      <div class="form-group">
                          <input id="login-button" class="form-button" type="submit" value="Submit" onclick="login()" />
                      </div>
                  </form>
              </div>
          </div>
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
