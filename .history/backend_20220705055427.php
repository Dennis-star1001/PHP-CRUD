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
    // $Select_sql =
    // echo $Select_sql;
    // exit;
    $query =  mysqli_query($conn,  "SELECT username AND phone FROM register WHERE username = '$username', phone = '$phone'");


    if (mysqli_num_rows($query) > 0) {
        header("Location: register.php?msg= This user already");
        exit;
    }
}


if (isset($_POST['login'])) {
}
