<?php require("connection.php"); ?>

<?php
   
    //    if(!isset($_SESSION['id'])) {
    //     header("Location: dashboard.php?msg=Malicious activities");
    //     exit;
    // }
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header("Location: dashboard.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild</title>
</head>
<body>
    <?php
         $sql = "SELECT * FROM animals WHERE id='$id'";
         $query = mysqli_query($conn, $sql);
 
         while($row = mysqli_fetch_array($query)) {
            $id = $row['id'];
            $name  = $row['Name'];
            $type  = $row['Type'];
            $habitat  = $row['Habitat'];
            $food  = $row['Food'];
            echo "<form method='POST' action='backend.php?id=$id'>";
            echo "<input type='text' name='name' value='{$row['Name']}' /><br>";
            echo "<input type='text' value='{$row['Type']}' name='type' /><br>";
            echo "<input type='text' value='{$row['Habitat']}' name='habitat' /><br>";
            echo "<input type='text' value='{$row['Food']}' name='food' /><br>";
            echo "<input type='submit' name='update' value='Update'/>";
            echo "</form>";
         }
    ?>
</body>
</html>