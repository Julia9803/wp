<?php
function preShow( $arr, $returnAsString=false ) {
         $ret  = '<pre>' . print_r($arr, true) . '</pre>';
         if ($returnAsString)
           return $ret;
         else
echo $ret; }
//       preShow($_POST);
//       preShow($_SESSION);
//       $aaarg = preShow($my_bad_array, true);
//       echo "Why is \n $aaarg \n not working?";
?>