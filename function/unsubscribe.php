<?php

include("connection.php");
$id=$_POST["subscription_id"];

$sql="DELETE FROM `subscription_table` WHERE `subscription_table`.`subscription_id` = $id";
$delete=mysqli_query($conn,$sql);
if($delete){
?>
    <script>
        window.alert("You have unsubscribed successfully");
        window.location.href="../customer.php";
    </script>
<?php
}else{
    ?>
        <script>
            window.alert("unsubscription failed.");
            window.location.href="../customer.php";  
        </script>
    <?php
}

?>