    <?php
    
   require("connection.php");
   
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: dashboard.php");
            exit;
        }
        
        $sql = "DELETE FROM animals WHERE id='$id'";
        mysqli_query($conn, $sql);
        
        header("Location: dashboard.php?success=Deleted successfully!");
        exit;
    
    ?>