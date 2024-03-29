<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    <script src="js/jquery.min.js"></script>
    <script>
        function clickMinus(){
            if(parseInt(document.getElementById("qty").value) - 1 >= 0)
                document.getElementById("qty").value = parseInt(document.getElementById("qty").value) - 1;
            }
                
        function clickPlus(){
            if(parseInt(document.getElementById("qty").value) + 1 >= 0)
                document.getElementById("qty").value =
                parseInt(document.getElementById("qty").value) + 1;
            }
        
        function check(){
            if(parseInt(document.getElementById("qty").value) > 0){
                return true;
            }else{
                alert("Sorry! You can't buy items with " + document.getElementById("qty").value + " quantity input.");
                return false;
            }
        }
    </script>
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
                <div>
                    <div class="detail-display">
                        <h2>Description</h2>
                    </div>
                    <div class="detail-display">
                        <h3>What it is:</h3>
                        <p>
                            An innovative foundation that delivers instant full coverage in a single dot—for less foundation for more coverage that lasts up to 24 hours.
                        </p>
                    </div>
                    <div class="detail-display">
                        <h3>What it does:</h3>
                        <p>
                            Give skin the best in flawless full coverage with this foundation concentrate. This revolutionary formula offers twice as much pigment as a leading full-coverage foundation, but in an oil-free base that blends instantly across the complexion to completely cover pores, blemishes, and other imperfections with the thinnest possible layer that lasts up to 24 hours. All foundations are composed of two parts: pigment and ingredients to carry the pigment to the skin.

                            Re(marc)able innovates by filling its formula with as much pigment as possible, leaving little room for non-essential ingredients, including water. Not only does it contain twice as much pigment as standard, full-coverage foundations, but these pigments are made of patented golden mica to give the complexion a more radiant, natural-looking glow. The pigments are wrapped in lecithin—an ingredient with a texture that feels similar to skin—to blend effortlessly and meld with the complexion for a smooth, soft-matte finish.
                        </p>
                    </div>
                    <div class="detail-display">
                        <h3>What else you need to kow:</h3>
                        <ul>
                            <li>
                                Re(Marc)able is inspired by Marc Jacobs's love of a radiant complexion.
                            </li>
                            <li>
                                Coverage: Full
                                Skin Type: Normal, Combination, Oily
                                Finish: Satin, Matte, Radiant, Natural
                            </li>
                            <li>
                                This product is formulated without parabens, sulfates and phthalates.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
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
