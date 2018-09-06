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
        <section class="titles" id="main-background">
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic01.jpg">
                    <h2>Marc Jacobs Beauty</h2>
                    <p>Re(marc)able Full Cover Foundation Concentrate.</p>
                    <p class="price">$80</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic02.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <p class="price">$80</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic03.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <p class="price">$80</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
        </section>
        <section class="titles" id="main-background">
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic04.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <p class="price">$80</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic05.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <p class="price">$80</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box" id="inner-background">
                <span class="image">
                    <img class="img-style" src="images/pic06.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <p class="price">$80</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
        </section>
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
