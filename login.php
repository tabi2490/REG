
<?php 
session_start(); 
include "db.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['date'] = $row['date'];
                header("Location: dash.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}
?>
