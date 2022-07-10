<?php 
require("connection.php");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['username'];
    $password = $_POST['username'];
    $phone = $_POST['username'];


    $sql = "INSERT INTO profile SET(username = '$username', email='$email', password='$password', phone = '$phone')";
}


if(isset($_POST['login'])){
    
}

?>