<?php

require("backend.php");
$_SESSION['username'];

?>
<?php
$err = "";
$success = '';
$clas = '';
if (isset($_GET['err'])) {
    $err = $_GET['err'];
    $clas = 'error';
} elseif (isset($_GET['success'])) {
    $success = $_GET['success'];
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
    <nav>
        <ul>
            <div class="main_nav">
                <?php echo "<li class='welcome'>" . "Welcome, " . $_SESSION['username'] . "</li>" ?>
                <div class="nav-links">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Regsiter</a></li>
                </div>

            </div>

        </ul>
    </nav>

    <div class="main-animal">
        <div class="animal-container">
            <div class="lef">
                <h1 class="title">Animals list</h1>
                <?php echo "<div class='$clas'>$success</div>" ?>
                <?php echo "<div class='$clas'>$err</div>" ?>

                <form method="POST" action="backend.php" class="animal-list">
                    <div class="input-field">
                        <label for="name">Name:</label>
                        <input type="text" placeholder="Enter animal Name" name='name'>
                    </div>

                    <div class="input-field">
                        <label for="name">Food:</label>
                        <input type="text" placeholder="Enter animal Food" name='food'>
                    </div>

                    <div class="input-field">
                        <label for="name">Type:</label>
                        <input type="text" placeholder="Enter animal Type" name='type'>
                    </div>


                    <div class="input-field">
                        <label for="name">Habitat:</label>
                        <input class="text-input" type="text" placeholder="Enter animal Habitat" name='habitat'>
                    </div>

                    <button type='submit' value="Save" class="submit" name="save">Save</button>
                </form>
            </div>
        </div>
        <div>

        </div>
    </div>
</body>

</html>