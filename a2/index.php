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

  <body>

    <header>
      <div>
        <img src="images/logo.png" width="50px" height="50px"/>Fantastic Shoes
        </div>
    </header>

    <nav>
      <div>
          <a href="products.php" target="_blank">Products</a> |
          <a href="service.php" target="_blank">Service</a> |
          <a href="login.php" target="_blank">Login</a> 
        </div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        
        <!-- <img src='../../media/website-under-construction.png' alt='Website Under Construction'/> -->
        </article>
        <section class="titles">
            <article class="box">
                <span class="image">
                    <img src="images/pic01.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box">
                <span class="image">
                    <img src="images/pic02.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box">
                <span class="image">
                    <img src="images/pic03.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
        </section>
        <section class="titles">
            <article class="box">
                <span class="image">
                    <img src="images/pic04.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box">
                <span class="image">
                    <img src="images/pic05.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
                    <a href="product.php">see more...</a>
                </span>
            </article>
            
            <article class="box">
                <span class="image">
                    <img src="images/pic06.jpg">
                    <h2>UGG boot</h2>
                    <p>A beautiful UGG boot.</p>
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
