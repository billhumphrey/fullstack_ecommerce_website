<?php

include("connection.php");
$id=$_POST["cart_id"];

 $sql="DELETE FROM `service_cart` WHERE `service_cart`.`cart_id` = $id";
 $delete=mysqli_query($conn,$sql);
 if($delete){
 ?>
     <script>
         window.alert("Service removed from Cart.");
         window.location.href="../CustomerPages/cart.php";
     </script>
 <?php
 }else{
     ?>
         <script>
             window.alert("Error! Service not removed.");
             window.location.href="../CustomerPages/cart.php";  
         </script>
     <?php
 }



?>