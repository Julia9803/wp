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

function saveFile() {
  $now = date('d/m/Y h:i');
  $fp = fopen("orders.txt", "a");
  flock($fp, LOCK_EX);
  foreach ( $_SESSION['cart'] as $purchase ) { 
    $order =  array_merge( array("purchase date" => $now), $_SESSION['user'], $purchase );
    fputcsv($fp, $order, ",");
  }
  $_SESSION['order'] = $order;
  fclose($fp);
}
?>