<?php 
require("connection.php");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO register SET username = '$username', email='$email', password='$password', phone = '$phone'";
    mysqli_query($conn, $sql);
    
}


if(isset($_POST['login'])){
    
}

?>