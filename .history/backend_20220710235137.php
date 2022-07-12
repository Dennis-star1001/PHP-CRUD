<?php
session_start();
require("connection.php");
require("function.php");
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $phone = $_POST['phone'];

    if (empty($username) || empty($email) || empty($password) || empty($phone)) {
        errorRedirect("register.php", "Empty field not allowed!");
        exit;
    }

    //check if existed
    select("register", $field, "username = $username AND phone = $phone");
    // $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";

    $query =  mysqli_query($conn, $Select_sql);

    if (mysqli_num_rows($query) > 0) {
        errorRedirect("register.php", "This user already exist");
        exit;
    } else {
        $Insert_sql = "INSERT INTO register SET username = '$username', email='$email', password='$password', phone = '$phone'";
        mysqli_query($conn, $Insert_sql);
        successRedirect("login.php", "You can now register");
    }
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];


    if (empty($username) || empty($password)) {
        errorRedirect("login.php", "Empty field not allowed!");

        exit;
    } else {
    }


    select("register", $field, "username = $username AND password = $password");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        successRedirect("dashboard.php", "success=Logged in...");
    } else {
        errorRedirect(" register.php", "User not found!");
        exit;
    }
}
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $Food = $_POST['food'];
    $Type = $_POST['type'];
    $Habitat = $_POST['habitat'];
    if (empty($name) || empty($Food) || empty($Type) || empty($Habitat)) {
        errorRedirect("dashboard.php", "Empty field not allowed!");
        exit;
    } else {
        $Insert_sql = "INSERT INTO animals SET  Name='$name', Food='$Food', Type='$Type', Habitat='$Habitat'";
        mysqli_query($conn, $Insert_sql);
        successRedirect("dashboard.php", "success=Successfully submited list!");
        exit;
    }
}


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['Name'];
    $type = $_POST['Type'];
    $food = $_POST['Food'];
    $habitat = $_POST['Habitat'];

    $sql = "UPDATE animals SET Name='$name', Food='$Food', Type='$Type', Habitat='$Habitat' WHERE id = '$id'";
    mysqli_query($conn, $sql);
    successRedirect("dashboard.php", "success=Updated successfully!");
    exit;
}
