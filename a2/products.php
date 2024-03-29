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

    <header class="opacity">
      <div>
        <img src="images/logo.png" width="70px" height="70px"/>Fantastic Makeup
        </div>
    </header>

    <nav class="opacity">
      <div>
          <a href="products.php" target="_self">Products</a> |
          <a href="product.php" target="_self">Product</a> |
          <a href="login.php" target="_self">Login</a> | 
          <a href="index.php" target="_self">Profile</a> | 
        </div>
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
                    <a href="product.php">see more...</a>
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

    <footer class="opacity-less">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yubin Gao, s3739865.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
