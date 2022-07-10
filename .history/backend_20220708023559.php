<?php
session_start();
require("connection.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $phone = $_POST['phone'];

    if (empty($username) || empty($email) || empty($password) || empty($phone)) {
        header("Location: register.php?err=Empty field not allowed!");
        exit;
    }

    //check if existed
    $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";

    $query =  mysqli_query($conn, $Select_sql);

    if (mysqli_num_rows($query) > 0) {
        header("Location: register.php?err=This user already exist");
        exit;
    } else {
        $Insert_sql = "INSERT INTO register SET username = '$username', email='$email', password='$password', phone = '$phone'";
        mysqli_query($conn, $Insert_sql);
        header("Location: login.php?success=You can now register");
    }
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];


    if (empty($username) || empty($password)) {
        header("Location: login.php?err=Empty field not allowed!");
        exit;
    } else {
    }

    $Select_sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($conn, $Select_sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("Location: animals.php?success=Logged in...");
    } else {
        header("Location: register.php?err=User not found!");
        exit;
    }
}
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $Food = $_POST['food'];
    $Type = $_POST['type'];
    $Habitat = $_POST['habitat'];
    if (empty($name) || empty($Food) || empty($Type) || empty($Habitat)) {

        header("Location: animals.php?err=Empty field not allowed!");
        exit;
    } else {
        $Insert_sql = "INSERT INTO animals SET  Name='$name', Food='$Food', Type='$Type', Habitat='$Habitat'";
        mysqli_query($conn, $Insert_sql);
        header("Location: animals.php?success=Successfully submited list!");
    }
}

if (isset($_POST['delete'])) {
   
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header("Location: animals.php");
        exit;
    }
    
    $sql = "DELETE FROM animals WHERE id='$id'";
    mysqli_query($connn, $sql);
    
    header("Location: animals.php?success=Deleted successfully!");
    exit;
}
