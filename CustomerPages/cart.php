<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer page</title>
    <!--Favicon Icon-->
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <!--CSS CUSTOM-->
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <div class="leftnav">
        <h4 style="color: #000; text-align: center; margin-bottom: 15px;">Customer Account</h4>
        <div class="menu">
            <a href="../goods.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                  </svg>
                Home</a>
                <a href="../customer.php">
                    <iconify-icon icon="lets-icons:user-light" class="user-icon"></iconify-icon>
                    My Profile</a>
                <a href="#" class="active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    Shopping Cart</a>
                <a href="orders.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                      My Orders</a>
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
        <div style="margin-top:20px;">
            <center>
                <button onclick="displayContent('div1')" class="btn btn-dark">View Product</button>
                <button onclick="displayContent('div2')" class="btn btn-dark">View Service</button>
            </center>
        </div>
        
        <div id="div1" class="product" style="display: block;">
            <table class="table table-dark table-hover" style="margin-top:20px;  margin-right:20px;">
                <thead>
                  <tr>
                    <th scope="col" style="text-align: center;">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                        require_once("../function/connection.php");
                        $customer_id=$_SESSION["user_id"];
                        $sql = "SELECT * FROM `product_cart` WHERE `customer_id` = '$customer_id'";
                        $result=mysqli_query($conn,$sql);

                ?>
                <?php while($row=mysqli_fetch_assoc($result)) {?>
                   <?php
                        require_once("../function/connection.php");
                        // SQL query to fetch image for the given username
                        $sql = "SELECT `first_image_name` FROM `product_table` WHERE `product_id` = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s",$row["product_id"]);
                        $stmt->execute();
                        $stmt->bind_result($image);
                        $stmt->fetch();
                        $stmt->close();
                        
                         // SQL query to fetch image for the given username
                         $sql = "SELECT `product_name` FROM `product_table` WHERE `product_id` = ?";
                         $stmt = $conn->prepare($sql);
                         $stmt->bind_param("s",$row["product_id"]);
                         $stmt->execute();
                         $stmt->bind_result($product_name);
                         $stmt->fetch();
                         $stmt->close();  
                    ?>
                  <tr>
                    <th>
                        <div class="text-center">
                            <img src="../upload/<?php echo$image;?>" class="img-thumbnail" alt="..." width="250px">
                        </div>
                    </th>
                    <td style="justify-content: center; align-items: center;"><?php echo$product_name;?></td>
                    <td><?php echo$row["price"]?></td>
                    <td><?php echo$row["quantity"]?></td>
                    <td><?php echo$row["subtotal"]?></td>
                    <td style="justify-content: center; align-items: center;">
                        <form method="post" action="../productPayment.php">
                            <input type="number" value="<?php echo $row["product_id"]?>" name="product_id" hidden>
                            <input type="number" value="<?php echo $customer_id?>" name="customer_id" hidden>
                            <input type="number" value="<?php echo$row["price"]?>" name="price" hidden>
                            <input type="number" value="<?php echo$row["quantity"]?>" name="quantity" hidden>
                            <button type="submit" class="btn btn-outline-light" style="padding:10px 30px; margin-top:6%; font-size: 20px;"><iconify-icon icon="ic:round-shopping-cart-checkout" style="font-size: 23px;"></iconify-icon> Check out</button>
                        </form>
                        <form method="post" action="../function/deleteCartProduct.php">
                            <input type="number" value="<?php echo$row["cart_id"]?>" hidden name="cart_id">
                            <button type="submit" class="btn btn-outline-danger" style="padding:10px 40px; margin-top:6%; font-size: 20px;"><iconify-icon icon="clarity:remove-line" style="font-size: 23px;"></iconify-icon> Remove</button>
                        </form>
                    </td>
                  </tr>
                  <?php }?>
                </tbody>
            </table>
        </div>
        <div id="div2" class="product" style="display: none;">
            <table class="table table-dark table-hover" style="margin-top:20px;  margin-right:20px;">
                <thead>
                  <tr>
                    <th scope="col" style="text-align: center;">Image</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">Charges</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        require_once("../function/connection.php");
                        $customer_id=$_SESSION["user_id"];
                        $sql = "SELECT * FROM `service_cart` WHERE `customer_id` = '$customer_id'";
                        $result=mysqli_query($conn,$sql);

                    ?>
                    <?php while($row=mysqli_fetch_assoc($result)) {?>
                        <?php
                            require_once("../function/connection.php");
                            // SQL query to fetch image for the given username
                            $sql = "SELECT `first_image_name` FROM `service_table` WHERE `service_id` = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s",$row["service_id"]);
                            $stmt->execute();
                            $stmt->bind_result($image);
                            $stmt->fetch();
                            $stmt->close();
                            
                            // SQL query to fetch image for the given username
                            $sql = "SELECT `service_name` FROM `service_table` WHERE `service_id` = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s",$row["service_id"]);
                            $stmt->execute();
                            $stmt->bind_result($service_name);
                            $stmt->fetch();
                            $stmt->close();  
                        ?> 
                  <tr>
                    <th>
                        <div class="text-center">
                            <img src="../upload/<?php echo$image?>" class="img-thumbnail" alt="..." width="250px">
                        </div>
                    </th>
                    <td><?php echo $service_name;?></td>
                    <td><?php echo$row["price"];?></td>
                    <td>
                        <form method="post" action="../servicePayment.php">
                            <input type="number" value="<?php echo$row["service_id"];?>" name="service_id" hidden>
                            <input type="number" value="<?php echo $customer_id?>" name="customer_id" hidden>
                            <input type="number" value="<?php echo$row["price"];?>" name="price" hidden>
                            <button type="submit" class="btn btn-outline-light" style="padding:10px 30px; margin-top:5%; font-size: 20px;"><iconify-icon icon="ic:round-shopping-cart-checkout" style="font-size: 23px;"></iconify-icon> Check out</button>
                        </form>
                            <form method="post" action="../function/deleteCartService.php">
                            <input type="number" value="<?php echo$row["cart_id"]?>" hidden name="cart_id">
                            <button type="submit" class="btn btn-outline-danger" style="padding:10px 40px; margin-top:6%; font-size: 20px;"><iconify-icon icon="clarity:remove-line" style="font-size: 23px;"></iconify-icon> Remove</button>
                        </form>
                    </td>
                  </tr>
                  <?php }?>
                </tbody>
            </table>
        </div>
       
    </div> 

    <script>
        // JavaScript function to show content of a specific div and hide the other
        function displayContent(divToShow) {
            // Get references to the div elements
            var div1 = document.getElementById("div1");
            var div2 = document.getElementById("div2");

            // Show or hide divs based on the button clicked
            if (divToShow === "div1") {
                div1.style.display = "block";
                div2.style.display = "none";
            } else if (divToShow === "div2") {
                div1.style.display = "none";
                div2.style.display = "block";
            }
        }
    </script>
</body>
</html>