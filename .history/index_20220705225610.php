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
        <ul class="nav-links">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Regsiter</a></li>
        </ul>
    </nav>

    <div class="main-animal">
        <h1>List of animals</h1>
        <form method="POST" action="index.php">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter animal Name" name='name'>

            <label for="name">Food:</label>
            <input type="text" placeholder="Enter animal Food" name='food'>

            <label for="name">Type:</label>
            <input type="text" placeholder="Enter animal Type" name='type'>

            <label for="name">Habitat:</label>
            <input type="text" placeholder="Enter animal Habitat" name='habitat'>
            <button type='submit' value="Save" class="submit">Save</button>
        </form>

    </div>
</body>

</html>