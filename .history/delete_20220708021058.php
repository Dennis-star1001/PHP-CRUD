<?php 
require("connection.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

}else{
    header("Location:animals.php");
}
