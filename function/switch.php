<?php
session_start();
$_SESSION["category"]="vendor";
header("Location: ../customer.php");
?>