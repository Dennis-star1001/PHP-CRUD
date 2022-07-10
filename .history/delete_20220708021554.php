<?php 
require("connection.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

}else{
    header("Location:animals.php");
}

$sql = "DELETE FROM animal WHERE id='$id'";
mysqli_query($conn, $sql);

header("Location:animals.php?error=Deleted successfully!");
exit;