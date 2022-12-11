<?php
require_once "config.php";
$username = $_POST['username'];
$pwd = $_POST['password'];
$encrypted_pwd = md5($pwd);
$perm = "r";
$sql = "INSERT INTO users (user_name,passphrase,permission) VALUES (?,?,?)";
if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "sss", $username, $encrypted_pwd,$perm);
    if (mysqli_stmt_execute($stmt)) {
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
header('location:loginpage.php')
    ?>