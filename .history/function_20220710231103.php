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
function insert($tabel, $sql){
global $conn;

}
// $Select_sql = "SELECT * FROM register WHERE username = '$username' AND phone = '$phone'";

?>