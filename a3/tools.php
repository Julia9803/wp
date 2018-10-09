<?php
function preShow( $arr, $returnAsString=false ) {
         $ret  = '<pre>' . print_r($arr, true) . '</pre>';
         if ($returnAsString)
           return $ret;
         else
          echo $ret; 
        }

function printMyCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class='mycode'>\n";
    foreach ($lines as $lineNo => $lineOfCode)
       printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
    echo "</pre>";
}

function php2js( $arr, $arrName ) {
    $lineEnd="";
    echo "<script>\n";
    echo "  var $arrName = {\n";
    foreach ($arr as $key => $value) {
      echo "$lineEnd    $key : $value";
      $lineEnd = ",\n";
    }
    echo "  \n};\n";
    echo "</script>\n\n";
  }

function styleCurrentNavLink( $css ) {
    $here = $_SERVER['SCRIPT_NAME'];
    $bits = explode('/',$here);
    $filename = $bits[count($bits)-1];
    echo "<style>nav a[href$='$filename'] { $css }</style>";
}

function validate_name($name) {
  $pattern_name = '/^[a-zA-Z \-.\']{1,100}$/';
  $res = preg_match($pattern_name,$name);
  if ($res == 1) {
      $_SESSION['user']['name'] = $name;
      return true;
  }else {
      echo "<h3>validate_name false</h3>";
      return false;
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
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_address($address) {
  $pattern_address = "/^[a-zA-Z0-9 \/\-.'\n]{1,}$/";
  $res = preg_match($pattern_address,$address);
  if ($res == 1) {
      $_SESSION['user']['address'] = $address;
      return true;
  }else {
      echo "<h3>validate_address false</h3>";
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
      echo "<h3>validate_mobilePhone false</h3>";
      return false;
  }
}

function validate_creditCard($cardNumber) {
  $pattern_card = '/^( ?\d){12,19}$/';
  $res = preg_match($pattern_card,$cardNumber);
  if ($res == 1) {
      return true;
  }else {
      echo "<h3>validate_creditCard false</h3>";
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
              echo "<h3>validate_expiryDate false</h3>";
              return false;
          }
          break;
      case 11:
          if($month >= 1 && $year > $present_year) {
              return true;
          }else {
              echo "<h3>validate_expiryDate false</h3>";
              return false;
          }
          break;
      default:
          if($year > $present_year) {
            return true;
          }else if($month >= $present_month + 2 && $year == $present_year) {
              return true;
          } else {
              echo "<h3>validate_expiryDate false</h3>";
              return false;
          }
      }
}

function saveFile() {
  $now = date('d/m/Y h:i');
  $fp = fopen("orders.txt", "a");
  flock($fp, LOCK_EX);
  foreach ( $_SESSION['cart'] as $purchase ) { 
    $order =  array_merge( $now, $_SESSION['user'], $purchase );
    fputcsv($fp, $order, ",");
  }
  fclose($fp);
}
?>