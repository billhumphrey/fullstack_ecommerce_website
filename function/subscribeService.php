<?php
  require_once("connection.php");

  $goodsId=$_POST["goodId"];
  $customerId=$_POST["customerId"];
  $vendorId=$_POST["vendorId"];
  $category=$_POST["category"];


    $sql="INSERT INTO `subscription_table` (`subscription_id`, `customer_id`, `goods_id`, `vendor_id` , `category`) VALUES (NULL, '$customerId', '$goodsId', '$vendorId' , '$category')";

        $insert=mysqli_query($conn, $sql);

        if($insert){
            ?>
                
                <script>
                    window.alert("Subscribed successfully");
                    window.location.href="../service.php";
                </script>
            
            <?php
        }else{
            ?>

                <script>
                    window.alert("Subscription Failed.Try again");
                    window.location.href="../service.php"
                </script>

            <?php
        }

?>