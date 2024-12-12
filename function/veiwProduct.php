<?php 
    session_start();
    $_SESSION["product_id"]=$id=$_POST["product_id"];

    header("Location: ../product.php");
?>