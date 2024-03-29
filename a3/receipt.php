<!DOCTYPE html>
<?php
    include_once('tools.php');
    //error_reporting(0);
    session_start();
    // echo '<h3> $_POST contains:</h3>';
    // preShow($_POST);
    // echo '<h3> $_SESSION contains:</h3>';
    // preShow($_SESSION);
?>
<?php
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6); box-shadow: 1px 1px 1px 2px navy;');
?>
<?php
    ini_set("error_reporting","E_ALL & ~E_NOTICE");
    $orders;
    $fp = fopen('orders.txt','r'); 
    if (($headings = fgetcsv($fp, 0, ",")) !== false) { 
        while ( $cells = fgetcsv($fp, 0, ",") ) { 
            $head = $cells[0]."_".$cells[1]."_".$cells[5]."_".$cells[6];
            for ($x=0; $x<count($cells); $x++) {
                $orders[$head][$headings[$x]]=$cells[$x]; 
            }
        } 
    }
    $_SESSION['orders'] = $orders;
    // preShow($orders);
    fclose($fp);
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
    <script src='js/receipt.js'></script>
  </head>

  <body class="receipt_style">

    <!-- <header>
        <div>
            <h2 class="brand_font"><img src="images/logo.png" width="70px" height="70px"/>Fantastic Makeup</h2>
        </div>
    </header> -->

<!-- <nav class="nav">
  <a href="products.php" target="_self"><span class="span">Products</span></a>  
  <a href="login.php" target="_self"><span class="span">Login</span></a>  
  <a href="index.php" target="_self"><span class="span">Profile</span></a>  
  <a href="cart.php" target="_self"><span class="span">Cart</span></a>  
  <a href="checkout.php" target="_self"><span class="span">Checkout</span></a>  
  <a href="receipt.php" target="_self"><span class="span">Receipt</span></a>  
</nav> -->

<main>
    <div class="middle-title">
      <h2 class="receipt_title_font">Receipt</h2>
    </div>
    <div class="letter_head">
        <!-- <h2 class="brand_font"><img src="images/logo.png" width="70px" height="70px"/>Fantastic Makeup</h2> -->
        <p>Fantastic Makeup</p>
        <p>551 Swanston St</p>
        <p>Melbourne, Victoria 3053</p>
        <br/>
        <p id="current_date"></p>
        <br/>
        <p>Mr./Ms. <?php echo $_SESSION['user']['name'] ?></p>
        <p><?php echo $_SESSION['user']['address'] ?></p>
        <br/>
    </div>
    <div class="middle-title">
      <p>Order Sheet</p>
    </div>
    <div class="table">
        <table class="u-full-width">
            <thead>
                <tr>
                    <th>Purchase Date</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>ID</th>
                    <th>OID</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($_SESSION['orders'] as $item) {
                    echo 
                    "<tr>
                        <td>".$item['Purchase Date']."</td>
                        <td>".$item['Name']."</td>
                        <td>".$item['Address']."</td>
                        <td>".$item['Mobile']."</td>
                        <td>".$item['Email']."</td>
                        <td>".$item['ID']."</td>
                        <td>".$item['OID']."</td>
                        <td>".$item['Quantity']."</td>
                        <td style='color:red'>$".$item['Unit Price']."</td>
                        <td style='color:red'>$".$item['Subtotal']."</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="button-center">
        <button class="button-primary" onclick="printPage()">PRINT</button>
    </div> -->
</main>

    <!-- <footer class="footer">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yubin Gao, s3739865,A3-s3739865.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer> -->
   
    </body>
</html>
