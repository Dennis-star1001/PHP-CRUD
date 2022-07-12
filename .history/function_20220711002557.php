<?php
require("connection.php");
function redirect($page, $messageType, $msg)
{
    header("Location:$page?$messageType=$msg");
}

function successRedirect($page, $msg)
{
    redirect($page, "success", $msg);
}
function errorRedirect($page, $msg)
{
    redirect($page, "err", $msg);
}
function selectQuery($tabel, $field, $sql)
{
    global $conn;
    $Select_sql = "SELECT $field FROM $tabel WHERE $sql";
    mysqli_query($conn, $Select_sql);
}
function insertQuery($table, $sql)
{
    global $conn;
    $Insert_sql = "INSERT INTO $table SET $sql";
    mysqli_query($conn, $Insert_sql);
}

function updateQuery($table, $sql)
{
    global $conn;
    $Update_sql = "UPDATE $table SET $sql";
    mysqli_query($conn, $Update_sql);
}
// $sql = "$sql = "UPDATE animals SET Name='$name', Food='$Food', Type='$Type', Habitat='$Habitat' WHERE id = '$id'";;
// $Insert_sql = "INSERT INTO animals SET  Name='$name', Food='$Food', Type='$Type', Habitat='$Habitat'";

// $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";
