    <?php
    
   require("connection.php");
   require("function.php");
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
           errorRedirect("dashboard.php", "", "");
            exit;
        }
        
        $sql = "DELETE FROM animals WHERE id='$id'";
        mysqli_query($conn, $sql);
        successRedirect("dashboard.php", "success", "Deleted successfully!");
        exit;
    
    ?>