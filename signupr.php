<?php
    require_once "config.php"; 
    $username= $_POST['username'];
    $password = $_POST['password'];
    $data = "INSERT INTO users (user_name,passphrase,permission) VALUES ('$username','$password','r')";
    mysqli_query($link, $data);
    header('location:loginpage.php')
?>