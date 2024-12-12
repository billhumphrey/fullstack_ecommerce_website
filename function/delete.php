<?php
include("connection.php");

$id=$_POST["id"];
$category=$_POST["category"];

$targetDir="../upload/";

if($category == 'service'){
    $sql1="SELECT `first_image_name` FROM `service_table` WHERE `service_id` = ?";
    $stmt = $conn->prepare($sql1);
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt->bind_result($image1name);
    $stmt->fetch();
    $stmt->close();

    $sql2="SELECT `second_image_name` FROM `service_table` WHERE `service_id` = ?";
    $stmt = $conn->prepare($sql2);
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt->bind_result($image2name);
    $stmt->fetch();
    $stmt->close();

    $sql3="SELECT `third_image_name` FROM `service_table` WHERE `service_id` = ?";
    $stmt = $conn->prepare($sql3);
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt->bind_result($image3name);
    $stmt->fetch();
    $stmt->close();

    $image1Delete=unlink($targetDir . $image1name);
    $image2Delete=unlink($targetDir . $image2name);
    $image3Delete=unlink($targetDir . $image3name);
    if($image1Delete && $image2Delete && $image3Delete){
        $sql="DELETE FROM `service_table` WHERE `service_table`.`service_id` = $id";
        $delete=mysqli_query($conn,$sql);
        if($delete){
        ?>
            <script>
                window.alert("The service is deleted successfully");
                window.location.href="../vendor.php";
            </script>
        <?php
        }else{
            ?>
                <script>
                    window.alert("Service not deleted.Try again");
                    window.location.href="../vendor.php";  
                </script>
            <?php
        }
    }else{
        ?>
                <script>
                    window.alert("Couldn't delete Service Images.Try again");
                </script>
            <?php
    }
      
} 
if($category == 'product'){
    $sql1="SELECT `first_image_name` FROM `product_table` WHERE `product_id` = ?";
    $stmt = $conn->prepare($sql1);
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt->bind_result($image1name);
    $stmt->fetch();
    $stmt->close();

    $sql2="SELECT `second_image_name` FROM `product_table` WHERE `product_id` = ?";
    $stmt = $conn->prepare($sql2);
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt->bind_result($image2name);
    $stmt->fetch();
    $stmt->close();

    $sql3="SELECT `third_image_name` FROM `product_table` WHERE `product_id` = ?";
    $stmt = $conn->prepare($sql3);
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt->bind_result($image3name);
    $stmt->fetch();
    $stmt->close();

    $image1Delete=unlink($targetDir . $image1name);
    $image2Delete=unlink($targetDir . $image2name);
    $image3Delete=unlink($targetDir . $image3name);

    if($image1Delete && $image2Delete && $image3Delete){
            $sql="DELETE FROM `product_table` WHERE `product_table`.`product_id` = $id";
            $delete=mysqli_query($conn,$sql);
            if($delete){
            ?>
                <script>
                    window.alert("The product is deleted successfully");
                    window.location.href="../vendor.php";
                </script>
            <?php
            }else{
                ?>
                    <script>
                        window.alert("Product not deleted");
                        window.location.href="../vendor.php";  
                    </script>
                <?php
            }
    }else{
        ?>
                <script>
                    window.alert("Couldn't delete Product Images.Try again");
                </script>
            <?php
    }

}else{
    ?>
    <script>
        window.alert("Ops!...something went wrong,,,data not deleted");
        // window.location.href="../vendor.php";  
    </script>
<?php
}


?>
