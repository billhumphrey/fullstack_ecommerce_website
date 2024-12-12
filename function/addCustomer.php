<?php
    require_once("connection.php");

    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $category=$_POST["category"];
    $phonenumber=$_POST["phonenumber"];
    $password=$_POST["password"];
    $status=$_POST["status"];

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to check if the email exists in the database
    $sql = "SELECT * FROM `members` WHERE `email` = '$email'";
    $table_select=mysqli_query($conn,$sql);

    $count=mysqli_num_rows($table_select);
    if($count>0){
            ?>
                <script>
                    window.location.href="../customerSignUp.php";
                    alert("Account already exists in the database. Please choose another email or log in.");
                </script>
            <?php
    }
    else{

        $sql="INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `email`, `phonenumber`, `category`, `status` ,`password`) VALUES (NULL, '$firstname', '$lastname', '$email' , '$phonenumber' , '$category' ,'$status' , '$hashedpassword')";


        $insert=mysqli_query($conn, $sql);

        if($insert){
            ?>
                
                <script>
                    window.alert("Signed up successfully. You can now log in");
                    window.location.href="../login.php";
                </script>
            
            <?php
        }else{
            ?>

                <script>
                    window.alert("Error,Couldn't sign up.Try again");
                    window.location.href="../customerSignUp.php"
                </script>

            <?php
        }

    }
?>