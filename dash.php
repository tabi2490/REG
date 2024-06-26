<?php
//include auth_session.php file on all user panel pages
session_start();
if (isset($_SESSION['date']) && isset($_SESSION['username'])) {
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <form>
            <h1>Account Information</h1>
            <p><strong><?php echo $_SESSION['username']; ?></strong><br>
                <?php echo $_SESSION['email']; ?><br>
                <?php echo $_SESSION['date']; ?>
            </p>
            <hr>
            <p><a href="logout.php">Logout</a></p>
        </form>
    </body>

    </html>
    <?php
}else{
     header("Location: index.php");
     exit();
}
?>