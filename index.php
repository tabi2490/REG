<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="login.php" method="post">
        <!--<h2>LOGIN</h2>-->
        <!--<label>User Name</label>-->
        <input type="text" name="username" placeholder="Username"><br>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error">
            <?php echo $_GET['error']; ?>
        </p>
        <?php } ?>
        <!--<label>Password</label>-->
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>
        <p class="link"><a href="reg.php">Click to Register</a></p>
    </form>

</body>

</html>