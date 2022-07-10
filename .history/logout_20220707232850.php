<?php 
require("backend.php");
session_unset();
session_destroy();

header("Location: login.php?success=Logout successful");
?>
