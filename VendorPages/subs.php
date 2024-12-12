<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor page</title>
    <!--Favicon Icon-->
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <!--CSS CUSTOM-->
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/scroll.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <div class="leftnav">
        <!-- <center>
        <img src="../images/vendor201.avif" class="p-left" alt="Profile Image">
        </center> -->
        <h4 style="color: #000; text-align: center; margin-bottom: 15px; font-size: 20px; font-weight: bold;">Vendor Account</h4>
        <div class="menu">
                <a href="../vendor.php">
                    <iconify-icon icon="lets-icons:user-light" class="user-icon"></iconify-icon>
                    My Profile</a>
                <a href="#" class="active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                    Subscriptions</a>
                <a href="orders.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-post" viewBox="0 0 16 16">
                        <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-8z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                    </svg>
                      Orders Made</a>
        </div>
        <div class="button">
            <center>
                <form method="post" action="../function/logout.php">
                    <button class="btn btn-outline-primary logout" type="submit" name="submit">
                        <iconify-icon icon="solar:logout-2-outline" class="logout-icon"></iconify-icon>
                        LOG OUT
                    </button>
                </form>
            </center>
        </div>
    </div>  
    <div class="rightnav">
        <table class="table table-dark table-hover" style="margin-top:20px;  margin-right:40px;">
            <thead>
              <tr>
                <th scope="col" style="text-align: center;">Image</th>
                <th scope="col">Product/Service Name</th>
                <th scope="col">Subscriber</th>
              </tr>
            </thead>
            <tbody>

            <?php
            //gets information of subscriptions for a specific vendor
                require_once("../function/connection.php");
                $vendor_id=$_SESSION["user_id"];
                $sql = "SELECT * FROM `subscription_table` WHERE `vendor_id` = '$vendor_id'";
                $result1=mysqli_query($conn,$sql);

                while($row1=mysqli_fetch_assoc($result1)){
                    $id=$row1["goods_id"];
                    $type=$row1["category"];
                    if($type == 'product'){
                    //gets information of subscriptions for a specific product
                    $sql="SELECT * FROM `product_table` WHERE `product_id` = '$id'";
                    $result2=mysqli_query($conn,$sql);
            ?>
            <?php while($row=mysqli_fetch_assoc($result2)) {?>  
              <tr>
                <td class="text-center"><img src="../upload/<?php echo$row["first_image_name"];?>" class="img-thumbnail" alt="..." width="250px"></td>
                <td><?php echo$row["product_name"];?></td>
                <?php
                    require_once("../function/connection.php");
                    $customer=$row1["customer_id"];
                    $sql = "SELECT * FROM `members` WHERE `member_id` = '$customer'";
                    $result3=mysqli_query($conn,$sql);
                    while($row3=mysqli_fetch_assoc($result3)){
                ?>
                <td><?php echo$row3["firstname"]?>  <?php echo$row3["lastname"]?></td>
                <?php }?>
              </tr>
            <?php }}}?>

            
            <?php
            //gets information of subscriptions for a specific vendor
                require_once("../function/connection.php");
                $sql = "SELECT * FROM `subscription_table` WHERE `vendor_id` = '$vendor_id'";
                $result1=mysqli_query($conn,$sql);

                while($row1=mysqli_fetch_assoc($result1)){
                    $id=$row1["goods_id"];
                    $type=$row1["category"];
                    if($type == 'service'){
                    //gets information of subscriptions for a specific product
                    $sql="SELECT * FROM `service_table` WHERE `service_id` = '$id'";
                    $result2=mysqli_query($conn,$sql);
            ?>
            <?php while($row=mysqli_fetch_assoc($result2)) {?>  
              <tr>
                <td class="text-center"><img src="../upload/<?php echo$row["first_image_name"];?>" class="img-thumbnail" alt="..." width="250px"></td>
                <td><?php echo$row["service_name"];?></td>
                <?php
                    require_once("../function/connection.php");
                    $customer=$row1["customer_id"];
                    $sql = "SELECT * FROM `members` WHERE `member_id` = '$customer'";
                    $result3=mysqli_query($conn,$sql);
                    while($row3=mysqli_fetch_assoc($result3)){
                ?>
                <td><?php echo$row3["firstname"]?>  <?php echo$row3["lastname"]?></td>
                <?php }?>
              </tr>
            <?php }}}?>

            </tbody>
          </table>
        
    </div> 
    
</body>
</html>