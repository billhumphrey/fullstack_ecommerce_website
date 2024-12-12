<?php
require_once("connection.php");

//basic vendor information
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$category=$_POST["category"];
$phonenumber=$_POST["phonenumber"];
$password=$_POST["password"];
//business vendor information
$regnumber=$_POST["regnumber"];
$bname=$_POST["bname"];
$bcategory=$_POST["bcategory"];
$description=$_POST["description"];
$status=$_POST["status"];

$hashedpassword = password_hash($password, PASSWORD_DEFAULT);


    // SQL query to check if the email exists in the database
    $sql = "SELECT * FROM `members` WHERE `email` = '$email'";
    $table_select=mysqli_query($conn,$sql);

    $count=mysqli_num_rows($table_select);
    if($count>0){
            ?>
                <script>
                    window.alert("Account already exists in the database. Please choose another email or log in.");
                    window.location.href="../vendorSignUp.php"
                </script>
            <?php
    }
    else{
        $sqlbusiness="INSERT INTO `new_business` (`business_id`, `regnumber`, `bname`, `bcategory`, `description`, `email`, `created`) VALUES (NULL, '$regnumber', '$bname', '$bcategory' , '$description' , '$email' , current_timestamp())";

        $sqlbasic="INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `email`, `phonenumber`, `category`, `status` ,`password`) VALUES (NULL, '$firstname', '$lastname', '$email' , '$phonenumber' , '$category' , '$status' , '$hashedpassword')";


        $basic=mysqli_query($conn, $sqlbasic);

        $business=mysqli_query($conn, $sqlbusiness);
        if($business && $basic){
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
                    window.location.href="../vendorSignUp.php"
                </script>

            <?php
        }
    }

?>