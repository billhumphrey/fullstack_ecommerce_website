<?php
require_once("connection.php");

$service=$_POST["service_id"];
$customer=$_POST["customer_id"];
$price=$_POST["price"];

$sql="INSERT INTO `service_cart` (`cart_id`, `customer_id`, `service_id`, `price`, `date_added`) VALUES (NULL, '$customer' , '$service' , '$price' , current_timestamp())";

$cart=mysqli_query($conn, $sql);
if($cart){
    ?>
        
        <script>
            window.alert("Service added succesfully");
            window.location.href="../service.php";
        </script>
    
    <?php
}else{
    ?>
        <script>
            window.alert("Error! failed to add item");
            window.location.href="../service.php"
        </script>

    <?php
}



?>