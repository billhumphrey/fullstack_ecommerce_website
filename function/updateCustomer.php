
<?php
require_once("connection.php");

$id=$_POST["customer_id"];
$newFirstname=$_POST["new_firstname"];
$newLastname=$_POST["new_lastname"];
$newEmail=$_POST["new_email"];
$newPhonenumber=$_POST["new_phonenumber"];


$sql="UPDATE `members` SET `firstname` = '$newFirstname', `lastname` = '$newLastname', `email` = '$newEmail', `phonenumber` = '$newPhonenumber' WHERE `members`.`member_id` = $id";
$update=mysqli_query($conn,$sql);


if($update){
    ?>
        
        <script>
            window.alert("Your Profile was updated successfully");
            window.location.href="../customer.php";
        </script>
    
    <?php
}else{
    ?>

        <script>
            window.alert("Error,Couldn't update");
            window.location.href="../customer.php";
        </script>

    <?php
}

?>