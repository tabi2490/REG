<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "reg";
$con = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$con) {
    echo "Connection failed!";
}
?>
