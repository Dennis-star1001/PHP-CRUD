<?php require("backend.php");

$msg = "";
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
}
?>
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
                <h1 class="title">Regsiter</h1>
               <?php echo $msg ?>
                <div class="input-field">
                    <label for="username">Username:</label>
                    <input type="text" class="text-input" placeholder="Username" name="username" />
                </div>
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" class="text-input" placeholder="email" name="email" />
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" class="text-input" placeholder="Password" name="password" />
                </div>
                <div class="input-field">
                    <label for="phone">Phone</label>
                    <input type="phonr" class="text-input" placeholder="phone" name="phone" />
                </div>
                <input type="submit" value="register" class="submit" name="register" />

            </div>

        </div>
    </form>

</body>

</html>