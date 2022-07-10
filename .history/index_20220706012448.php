<?php

require("backend.php");
$_SESSION['username'];

?>
<?php 
$err = "";
$sucess ='';
$clas = '';
if (isset($_GET['err'])) {
    $err = $_GET['err'];
    $clas = 'error';

}elseif(isset($_GET['sucess'])){
    $sucess = $_GET['err'];
    $clas = 'sucess';

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
        <ul >
            <?php echo "<li>" . $_SESSION['username'] . "</li>" ?>
            <div class="nav-links">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Regsiter</a></li>
            </div>
           
        </ul>
    </nav>

    <div class="main-animal">
        <div class="animal-container">
            <div class="left">
            <?php echo "<div class='$clas'>$sucess</div>" ?>
                <h1 class="title">Animals list</h1>
                <form method="POST" action="index.php">
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

                    <button type='submit' value="Save" class="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>