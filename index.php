<?php

    if(!isset($_SERVER['HTTPS'])){

        header("HTTP/1.1 301 Moved Permanently"); 

        header("Location: https://skillcode.ru");

        return true;

    }

?>

<?php include 'header.php';?>

<?php include 'content.php';?>

<?php include 'footer.php';?>