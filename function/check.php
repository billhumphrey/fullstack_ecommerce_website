<?php
session_start();
$error = "Invalid Password or Email! Please Try again";

if(isset($_POST["submit"])){
    require("connection.php");
    $username=$_POST["username"];
    $password=$_POST["password"];


  // SQL query to fetch hashed password for the given username
  $sql = "SELECT `password` FROM `members` WHERE `email` = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s",$username);
  $stmt->execute();
  $stmt->bind_result($hashedPassword);
  $stmt->fetch();
  $stmt->close();
  
   // SQL query to fetch firstname for the given username
   $sql = "SELECT `firstname` FROM `members` WHERE `email` = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s",$username);
   $stmt->execute();
   $stmt->bind_result($firstname);
   $stmt->fetch();
   $stmt->close();

    // SQL query to fetch lastname for the given username
    $sql = "SELECT `lastname` FROM `members` WHERE `email` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->bind_result($lastname);
    $stmt->fetch();
    $stmt->close();

  // SQL query to fetch phonenumber for the given username
  $sql = "SELECT `phonenumber` FROM `members` WHERE `email` = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s",$username);
  $stmt->execute();
  $stmt->bind_result($phonenumber);
  $stmt->fetch();
  $stmt->close();

   // SQL query to category for the given username
   $sql = "SELECT `category` FROM `members` WHERE `email` = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s",$username);
   $stmt->execute();
   $stmt->bind_result($category);
   $stmt->fetch();
   $stmt->close();

   // SQL query to category for the given username
   $sql = "SELECT `status` FROM `members` WHERE `email` = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s",$username);
   $stmt->execute();
   $stmt->bind_result($status);
   $stmt->fetch();
   $stmt->close();

   // SQL query to category for the given id
   $sql = "SELECT `member_id` FROM `members` WHERE `email` = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s",$username);
   $stmt->execute();
   $stmt->bind_result($id);
   $stmt->fetch();
   $stmt->close();

  // Verify the hashed password
if (password_verify($password, $hashedPassword)) {
  // Perform your authenticated actions here
        session_start();
        $_SESSION["email"]=$username;
        $_SESSION["firstname"]=$firstname;
        $_SESSION["lastname"]=$lastname;
        $_SESSION["phonenumber"]=$phonenumber;
        $placer=$_SESSION["category"]=$category;

        if($placer=='customer'){
          $_SESSION["user_id"]=$id;
          $placer=$_SESSION["category"]=$category;
          header("Location: ../goods.php");
        }else{
          $vendor=$placer=$_SESSION["status"]=$status;
          if($vendor=='active'){
            $placer=$_SESSION["category"]=$category;
            $_SESSION["user_id"]=$id;
            header("Location: ../vendor.php");
          }else{
            ?>
                <script>
                    window.alert("The account is currently inactive.");
                    window.location.href="../index.html";
                </script>
            <?php
          } 
        }
      
} else {
  
    $_SESSION["error"] = $error;
    header("location: ../login.php");

}
}
?>