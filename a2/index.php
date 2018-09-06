<!DOCTYPE html>
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

    <header>
      <div>
        <img src="images/logo.png" width="70px" height="70px"/>Fantastic Shoes
        </div>
    </header>

    <nav>
      <div>
          <a href="products.php" target="_self">Products</a> |
          <a href="product.php" target="_self">Product</a> |
          <a href="login.php" target="_self">Login</a> | 
          <a href="index.php" target="_self">Main</a> | 
        </div>
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
                          <label>Username：</label>
                          <input id="username" class="form-input" type="text" value="julia9803" disabled="disabled"  required/>
                      </div>
                      <div class="form-group">
                          <label>Background：</label>
                          <input id="background" class="form-input" type="text" value="graduate student in Software Engineering" disabled="disabled" required/>
                      </div>
                      <div class="form-group">
                          <label>Hobby：</label>
                          <input id="hobby" class="form-input" type="text" value="shopping" disabled="disabled" required/>
                      </div>
                      <div class="form-group">
                          <label>Focus：</label>
                          <input id="focus" class="form-input" type="text" value="summer shoes and winter boots" disabled="disabled" required/>
                      </div>
                      <div class="form-group">
                          <label>Focus：</label>
                          <input id="focus" class="form-input" type="text" value="summer shoes and winter boots" disabled="disabled" required/>
                      </div>

                  </form>
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
