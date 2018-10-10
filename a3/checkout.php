<!DOCTYPE html>
<?php
    include_once('tools.php');
    //error_reporting(0);
    session_start();
?>
<?php
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6); box-shadow: 1px 1px 1px 2px navy;');
?>
<?php
    $has_errors = 0;
    $name_error = "";
    $address_error = "";
    $mobile_error = "";
    $email_error = "";
    $card_error = "";
    $date_error = "";

    if(isset($_POST['submit'])) {
        echo "<h3>isset submit</h3>";
        validate_name($_POST['name']);
        validate_address($_POST['address']);
        validate_mobilePhone($_POST['mobile_phone']);
        validate_email($_POST['email']);
        validate_creditCard($_POST['credit_card']);
        validate_expiryDate($_POST['expiry_date']);

        if($has_errors == 0){
            saveFile();
            header("Location: receipt.php");
        }
                            
        //                      else {
        //     $_SESSION['user'] = "";
        //     echo '<h3>name_error</h3>';
        //     preShow($GLOBALS['name_error']);
        // }
    }

    function validate_name($name) {
        $pattern_name = '/^[a-zA-Z \-.\']{1,100}$/';
        $res = preg_match($pattern_name,$name);
        if ($res == 1) {
            $_SESSION['user']['name'] = $name;
            return true;
        }else {
            $GLOBALS['name_error'] = "<label style='color:red'>please input a valid name</label>";
            $GLOBALS['has_errors'] ++;
        }
        
      }
      
      function validate_email($email) {
        // $pattern_email = '/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/';
        // $res = preg_match($pattern,$email);
        // if($email) {
        //     return true;
        // }else {
        //     return false;
        // }
        $_SESSION['user']['email'] = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $GLOBALS['email_error'] = "<label style='color:red'>please input a valid email</label>";
            $GLOBALS['has_errors'] ++;
            return false;
        } else {
            return true;
        }
      }
      
      function validate_address($address) {
        $pattern_address = "/^[a-zA-Z0-9 \/\-.'\n]{1,}$/";
        $res = preg_match($pattern_address,$address);
        if ($res == 1) {
            $_SESSION['user']['address'] = $address;
            return true;
        }else {
            $GLOBALS['address_error'] = "<label style='color:red'>please input a valid address</label>";
            echo "<h3>validate_address false</h3>";
            $GLOBALS['has_errors'] ++;
            return false;
        }
      }
      
      function validate_mobilePhone($phoneNumber) {
        $pattern_phone = '/^(\(04\)|04|\+614)( ?\d){8}$/';
        $res = preg_match($pattern_phone,$phoneNumber);
        if ($res == 1) {
            $_SESSION['user']['mobile'] = $phoneNumber;
            return true;
        }else {
            $GLOBALS['mobile_error'] = "<label style='color:red'>please input a valid mobile phone number started with +614 or 04 or (04)</label>";
            echo "<h3>validate_mobilePhone false</h3>";
            $GLOBALS['has_errors'] ++;
            return false;
        }
      }
      
      function validate_creditCard($cardNumber) {
        $pattern_card = '/^( ?\d){12,19}$/';
        $res = preg_match($pattern_card,$cardNumber);
        if ($res == 1) {
            return true;
        }else {
            $GLOBALS['card_error'] = "<label style='color:red'>please input a valid credit card number within 12 to 19 number digits</label>";
            echo "<h3>validate_creditCard false</h3>";
            $GLOBALS['has_errors'] ++;
            return false;
        }
      }
      
      function validate_expiryDate($expiryDate) {
        $date = explode("-",$expiryDate);
        $year = (int)$date[0];
        $month = (int)$date[1];
        $present_year = (int)date("Y");
        $present_month = (int)date("m");
       
        switch ($present_month){
            case 12:
                if($month >= 2 && $year > $present_year) {
                    return true;
                }else {
                    $GLOBALS['date_error'] = "<label style='color:red'>please input a valid expiry date. card cannot expire within one month of purchase</label>";
                    echo "<h3>validate_expiryDate false</h3>";
                    $GLOBALS['has_errors'] ++;
                    return false;
                }
                break;
            case 11:
                if($month >= 1 && $year > $present_year) {
                    return true;
                }else {
                    $GLOBALS['date_error'] = "<label style='color:red'>please input a valid expiry date. card cannot expire within one month of purchase</label>";
                    echo "<h3>validate_expiryDate false</h3>";
                    $GLOBALS['has_errors'] ++;
                    return false;
                }
                break;
            default:
                if($year > $present_year) {
                  return true;
                }else if($month >= $present_month + 2 && $year == $present_year) {
                    return true;
                } else {
                    $GLOBALS['date_error'] = "<label style='color:red'>please input a valid expiry date. card cannot expire within one month of purchase</label>";
                    echo "<h3>validate_expiryDate false</h3>";
                    $GLOBALS['has_errors'] ++;
                    return false;
                }
            }
      }
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
    <script src='js/checkout.js'></script>
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
    <div class="middle-title">
      <h2>CHECKOUT</h2>
    </div>

    <form action="checkout.php" method="post">
        <div class="content-center">
            <div class="row">
                <div class="ten columns">
                </div>
                <div class="ten columns">
                    <label for="exampleEmailInput">Name</label>
                    <input class="u-full-width" type="text" name="name" style="float:left;" required="required"/>
                    <?php echo $name_error; ?>
                </div>
                <div class="ten columns">
                    <label for="exampleEmailInput">Email</label>
                    <input class="sixty-width" type="email" placeholder="test@mailbox.com" name="email" style="float:left;" required="required"/>
                    <?php echo $email_error; ?>
                </div>
                <div class="ten columns">
                    <label for="exampleEmailInput">Mobile Phone</label>
                    <input class="sixty-width" type="text" name="mobile_phone" style="float:left;" required="required"/>
                    <?php echo $mobile_error; ?>
                </div>
                <div class="ten columns">
                    <label for="exampleEmailInput">Credit Card</label>
                    <input class="sixty-width" type="text" id="credit_card" name="credit_card" oninput="validate_cardNumber()" style="float:left;" required="required"/>
                    <img src="images/visa.png" class="twenty-width" id="visaIcon" style="display:none" />
                    <?php echo $card_error; ?>
                </div>
                <div class="ten columns">
                    <label for="exampleEmailInput">Expiry Date</label>
                    <input class="sixty-width" type="date" name="expiry_date" style="float:left;" required="required"/>
                    <?php echo $date_error; ?>
                </div>
                <div class="ten columns">
                    <label for="address">Address</label>
                    <textarea class="seventy-four-width" name="address" style="float:left;" required="required"></textarea>
                    <?php echo $address_error; ?>
                </div>
                <div class="ten columns">
                    <input class="button-primary" type="submit" name="submit" value="submit">
                </div>
            </div>
        </div>
    </form>
    
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
