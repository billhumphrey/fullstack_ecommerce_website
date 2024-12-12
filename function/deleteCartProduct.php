<?php

include("connection.php");
$id=$_POST["cart_id"];

 $sql="DELETE FROM `product_cart` WHERE `product_cart`.`cart_id` = $id";
 $delete=mysqli_query($conn,$sql);
 if($delete){
 ?>
     <script>
         window.alert("Product removed from Cart.");
         window.location.href="../CustomerPages/cart.php";
     </script>
 <?php
 }else{
     ?>
         <script>
             window.alert("Error! Product not removed.");
             window.location.href="../CustomerPages/cart.php";  
         </script>
     <?php
 }



?>