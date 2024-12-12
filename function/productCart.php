<?php
require_once("connection.php");

$product=$_POST["product_id"];
$customer=$_POST["customer_id"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];

$subtotal=$price * $quantity;


$sql="INSERT INTO `product_cart` (`cart_id` , `customer_id`, `product_id`, `quantity`, `price`, `subtotal`, `date_added`) VALUES (NULL, '$customer' , '$product' , '$quantity' , '$price' , '$subtotal' , current_timestamp())";

$cart=mysqli_query($conn, $sql);
if($cart){
    ?>
        
        <script>
            window.alert("Product added succesfully");
            window.location.href="../product.php";
        </script>
    
    <?php
}else{
    ?>
        
    <script>
        window.alert("Error! Item not added");
        window.location.href="../product.php";
    </script>

<?php
}


?>