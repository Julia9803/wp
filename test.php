<!doctype html>
<html>
    <body>
        <select name='...'>
<?php
  $seasons = [
    'Autumn' => ['March', 'April', 'May'],
    'Winter' => ['June', 'July', 'August'],
    'Spring' => ['September', 'October', 'November'],
    'Summer' => ['December', 'January', 'February']
  ];
  foreach ( $seasons as $season => $months ) {
    echo "<optgroup label='$season'>";  
    foreach ( $months as $month ) {
      echo "<option value='$month'>$month</option>";
    }
    echo "</optgroup>";
  }
?>
</select>
        <h3>$_COOKIE contains:</h3>
        <pre><?php print_r($_COOKIE); ?></pre>
        
        <? php 
        $post = print_r($_POST, true);
        echo "<h3>\$_POST contains:</h3>
        $post
        <pre>";
        ?>
        
        <h3>$_GET contains:</h3>
        <pre><?php print_r($_GET); ?></pre>
        
        <h3>$_REQUEST contains:</h3>
        <pre><?php print_r($_REQUEST); ?></pre>
    </body>
</html>