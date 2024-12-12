<?php 
    session_start();
    $_SESSION["service_id"]=$id=$_POST["service_id"];

    header("Location: ../service.php");
?>