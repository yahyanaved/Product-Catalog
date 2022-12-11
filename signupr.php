<?php
require_once "config.php";
$username = $_POST['username'];
$password1 = $_POST['password'];
$password = md5($password1);
$data = "INSERT INTO users (user_name,passphrase,permission) VALUES ('$username','$password','r')";
mysqli_query($link, $data);
header('location:loginpage.php')
    ?>