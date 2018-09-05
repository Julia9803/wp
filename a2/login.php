<!DOCTYPE html>
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
      <header>
      <div>
        <img src="images/logo.png" width="70px" height="70px"/>Fantastic Shoes
        </div>
    </header>

    <nav>
      <div>
          <a href="products.php" target="_self">Products</a> |
          <a href="service.php" target="_self">Service</a> |
          <a href="login.php" target="_self">Login</a> | 
          <a href="index.php" target="_self">Main</a> | 
        </div>
    </nav>
      
      <main id="main-background">
          <div class="login">
              <div class="login-content">
                  <div class="login-logo">
                      <img src="images/logo.png" width="150px" height="170px"/><br/>
                      <h2>The Fantastic</h2>
                  </div>
                  <form class="form">
                      <div class="form-group">
                          <label>Username：</label>
                          <input id="username" class="form-input" type="text" placeholder="Please input username." onChange="usernameChnage()" required/>
                      </div>
                      <div class="form-group">
                          <label>Password：</label>
                          <input id="password" class="form-input" type="password" placeholder="Please input password." onChange="passwordChange()" required/>
                      </div>
                      <div class="form-group">
                          <input id="login-button" class="form-button" type="button" value="Submit" onclick="login()" />
                      </div>
                  </form>
              </div>
          </div>
      </main>
      
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yubin Gao, s3739865.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
