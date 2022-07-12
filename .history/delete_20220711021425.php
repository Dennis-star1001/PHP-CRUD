    <?php
    
   require("connection.php");
   require("function.php");
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
           successRedirect("dashboard.php");
            exit;
        }
        
        $sql = "DELETE FROM animals WHERE id='$id'";
        mysqli_query($conn, $sql);
        
        header("Location: dashboard.php?success=Deleted successfully!");
        exit;
    
    ?>