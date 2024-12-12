<?php
session_start();

if($_SESSION["category"]=='customer'){
    session_destroy();
    header("Location:../secondPage.html");
}else{
    session_destroy();
    header("Location:../login.php");
}


?>