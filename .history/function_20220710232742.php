<?php 
require("connection.php");
function redirect($page, $messageType, $msg){
    header("Location:$page?$messageType=$msg");
}

function successRedirect($page, $msg){
redirect($page, "success", $msg);
}
function errorRedirect($page, $msg){
    redirect($page, "err", $msg);
}
function select($tabel, $field = "*", $sql){
global $conn;
$Select_sql = "SELECT $field FROM $tabel WHERE $sql";
mysqli_query($conn, $Select_sql);
}
// $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";
