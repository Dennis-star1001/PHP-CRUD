<?php
require("connection.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $phone = $_POST['phone'];

if(empty($username) || empty($email) || empty($password) || empty($phone)){
    header("Location: register.php?msg=Empty field not allowed!");
    exit;
}
  
    //check if existed
    $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";
   
    $query =  mysqli_query($conn, $Select_sql);


    if (mysqli_num_rows($query) > 0) {
        header("Location: register.php?error=msg=This user already");
        exit;
    }else{
        $Insert_sql = "INSERT INTO register SET username = '$username', email='$email', password='$password', phone = '$phone'";
        mysqli_query($conn, $Insert_sql);
        header("Location: login.php?success=msg=You can now register");
    
    }
    
}


if (isset($_POST['login'])) {
    if($success = $msg){
        echo "success";
    }
    $msg = "";
    $type = "";
   if (isset($_GET['msg'])) {
       $msg = $_GET['msg'];
   } 
}
