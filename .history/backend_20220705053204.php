<?php
require("connection.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $phone = $_POST['phone'];


    $Insert_sql = "INSERT INTO register SET username = '$username', email='$email', password='$password', phone = '$phone'";
    mysqli_query($conn, $Insert_sql);

    //check if existed
    $Select_sql = "SELECT username, phone From register WHERE username = $username, phone = $phone";
    echo $Select_sql;
    exit;

    mysqli_query($conn, $Select_sql);
}


if (isset($_POST['login'])) {
}
