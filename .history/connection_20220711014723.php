<?php 


$conn = mysqli_connect("localhost", "root", "", "Wild_animals");
if(!$conn){
die("Connection failed: " . mysqli_connect_error());
}
