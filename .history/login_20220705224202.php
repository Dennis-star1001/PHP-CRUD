<?php require("backend.php");
?>
<?php 
$err = "";
$success ='';
$clas ='';
if (isset($_GET['err'])) {
    $err = $_GET['err'];
    $clas = 'error';

}elseif(isset($_GET['success'])){
    $sucess = $_GET['success'];
    $clas = 'success';

} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="backend.php">
        <div class="container">
            <div class="left">
            <?php echo "<div class='$clas'>$err</div>" ?>
                <?php echo "<div class='$clas'>$success</div>" ?>
            <h1 class="title">Login</h1>
                <div class='success'></div>
                <div class="input-field">
                    <label for="username">Username:</label>
                    <input type="text" class="text-input" placeholder="Username" name="username" />
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" class="text-input" placeholder="Password" name="password" />
                    <p class="login-link">Don`t have an account? <a href="register.php">Regsiter here</a> </p>
                </div>

                <input type="submit" value="Save" class="submit" name="login" />

            </div>

        </div>
    </form>

</body>

</html>