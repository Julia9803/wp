<!DOCTYPE html>
<?php
    include_once('tools.php');
    error_reporting(0);
    // topModule('Practice');
?>
<?php
    session_start();
    if (isset($_POST["submit"]))          
        $_SESSION['cart']=$_POST; 
?>
<?php
    echo '<h3> $_POST contains:</h3>';
    preShow($_POST);
    echo '<h3> $_SESSION contains:</h3>';
    preShow($_SESSION);
?>
<html lang='en'>
<head></head>
<body>
    <h1>Pizza Shop</h1>
    <form action="practice.php" method="post">
        <p>Pizza name</p><br/>
        <select name="type">
            <option value="1">a</option>
            <option value="2">b</option>
            <option value="3">c</option>
        </select>
        <input type="submit" value="submit" name="submit" />
    </form>
</body>
<!-- <?php endModule(); ?> -->
    
    