<?php
require("connection.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $phone = $_POST['phone'];

if(empty($username) || empty($email) || empty($password) || empty($phone)){
    header("Location: register.php?msg = Empty field not allowed!");
}
    $Insert_sql = "INSERT INTO register SET username = '$username', email='$email', password='$password', phone = '$phone'";
    mysqli_query($conn, $Insert_sql);

    //check if existed
    $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";
   
    $query =  mysqli_query($conn, $Select_sql);


    if (mysqli_num_rows($query) > 0) {
        header("Location: register.php?msg=This user already");
        exit;
    }
    
}


if (isset($_POST['login'])) {
}
