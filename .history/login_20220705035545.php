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
    <form method="POST" action="getLogin.php">
        <div class="container">
            <div class="left">
            <div class="success">Success</div>
                <div class="error">Error</div>
            <h1 class="title">Login</h1>
                <div class='success'></div>
                <div class="input-field">
                    <label for="username">Username:</label>
                    <input type="text" class="text-input" placeholder="Username" name="username" />
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" class="text-input" placeholder="Password" name="password" />
                </div>

                <input type="submit" value="Save" class="submit" name="login" />

            </div>

        </div>
    </form>

</body>

</html>