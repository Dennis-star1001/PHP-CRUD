<?php
require("function.php");
require("connection.php");
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

    $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";
    $query =  mysqli_query($conn, $Select_sql);

selectQuery("register", "username = '$username' AND phone = '$phone'");

    if (mysqli_num_rows($query) > 0) {
        errorRedirect("register.php", "This user already exist");
        exit;
    } else {
        insertQuery("register", "username = '$username', email='$email', password='$password', phone = '$phone'");
        successRedirect("login.php", "You can now register");
    }
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];


    if (empty($username) || empty($password)) {
        errorRedirect("login.php", "Empty field not allowed!");

        exit;
    }
    // function selectQuery($table, $field = "*", $conditions = "")
    $Select_sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $query =  mysqli_query($conn, $Select_sql);
   

    // selectQuery("register", "username = '$username' AND password = '$password'");


    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        successRedirect("dashboard.php", "success=Logged in...");
    } else {
        errorRedirect("login.php", "User not found!");
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
        insertQuery("animals", "Name='$name', Food='$Food', Type='$Type', Habitat='$Habitat'");
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

    updateQuery("animals", "Name='$name', Food='$Food', Type='$Type', Habitat='$Habitat' WHERE id = '$id'");
    successRedirect("dashboard.php", "success=Updated successfully!");
    exit;
}
