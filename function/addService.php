<?php
    require_once("connection.php");
     $statusMsg='';
     $targetDir='../upload/';

if(isset($_POST["submit"])){ 
    if(!empty($_FILES["service_image1"]["name"])){
        $name=$_POST["service_name"];
        $category=$_POST["service_category"];
        $service_status=$_POST["service_status"];
        $price=$_POST["service_price"];
        $schedule=$_POST["schedule"];
        $timeStart=$_POST["time_start"];
        $timeEnd=$_POST["time_end"];
        $description=$_POST["service_description"]; 
        $vendorId=$_POST["vendor_id"]; 
       
        $firstImage = $_FILES["service_image1"]["name"]; 
        $secondImage = $_FILES["service_image2"]["name"]; 
        $thirdImage = $_FILES["service_image3"]["name"]; 

        $fileExt1= explode('.',$firstImage);
        $fileActualExt1=strtolower(end($fileExt1));
        $fileExt2= explode('.',$secondImage);
        $fileActualExt2=strtolower(end($fileExt2));
        $fileExt3= explode('.',$thirdImage);
        $fileActualExt3=strtolower(end($fileExt3));

        $firstNewName = uniqid('',true).".".$fileActualExt1;
        $secondNewName = uniqid('',true).".".$fileActualExt2;
        $thirdNewName = uniqid('',true).".".$fileActualExt3;


        $targetFilePath1 = $targetDir . $firstNewName;
        $targetFilePath2 = $targetDir . $secondNewName; 
        $targetFilePath3 = $targetDir . $thirdNewName;  

        $fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION); 
        $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
        $fileType3 = pathinfo($targetFilePath3,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType1, $allowTypes) || in_array($fileType2, $allowTypes) || in_array($fileType3, $allowTypes)){ 
            // Upload file to server 
            move_uploaded_file($_FILES["service_image2"]["tmp_name"], $targetFilePath2);
            move_uploaded_file($_FILES["service_image3"]["tmp_name"], $targetFilePath3);
            
            if(move_uploaded_file($_FILES["service_image1"]["tmp_name"], $targetFilePath1)){ 
                // Insert image file name into database 
                    $sql="INSERT INTO `service_table` (`service_id`, `vendor_id`, `service_name`, `service_category`, `service_price`, `service_description` , `schedule` , `time_start` , `time_end` , `status` ,`first_image_name` , `second_image_name` , `third_image_name`) VALUES (NULL, '$vendorId', '$name', '$category' , '$price' , '$description' , '$schedule' , '$timeStart' , '$timeEnd' , '$service_status' , '$firstNewName' , '$secondNewName' , '$thirdNewName')";
                    $insert=mysqli_query($conn, $sql);
                if($insert){ 
                    ?>
                        <script>
                            window.alert("Service has been added successfully");
                            window.location.href="../vendor.php";
                        </script>
            
                    <?php
                }else{ 
                    ?>
                        <script>
                            window.alert("Error! Service addition failed. Please try again");
                            window.location.href="../vendor.php";
                        </script>
                    <?php
                }  
            }else{ 
                ?>
                    <script>
                        window.alert("Sorry, there was an error uploading the image.");
                        window.location.href="../vendor.php";
                    </script>
                <?php
            } 
        }else{ 
            ?>
                <script>
                    window.alert("Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.Try again");
                    window.location.href="../vendor.php";
                </script>
            <?php
        } 
    }else{ 
        ?>
        <script>
            window.alert("Please select an Image to upload.");
            window.location.href="../vendor.php";
        </script>
    <?php
    } 
} 

?>