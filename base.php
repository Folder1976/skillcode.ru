<?php

    if(!isset($_SERVER['HTTPS'])){

        header("HTTP/1.1 301 Moved Permanently"); 

        return true;

    }

?>

<?php include 'header.php';?>

<?php include 'content-base.php';?>

<?php include 'footer.php';?>