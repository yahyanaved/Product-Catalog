<?php
require 'config.php';
$username = mysqli_real_escape_string($link,$_POST['username']);
$password = mysqli_real_escape_string($link,$_POST['password']);
$encrypted_pwd = md5($password);

$sql = "SELECT * FROM users WHERE user_name= ?;";
if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $username);
    if (mysqli_stmt_execute($stmt)) {
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data = $row["user_name"];
        $data2 = $row["passphrase"];
        $data3 = $row["permission"];
        $data4 = $row["store_id"];
    }
}
if ($username == $data && $encrypted_pwd == $data2 && $data3 == 'rw') {
    header("location:admin.php?storeid=".$data4);
} else if ($username == $data  && $encrypted_pwd == $data2 && $data3 == 'r') {
    header('location:user.php?');
} else {
    header('location:loginpage.php?login=0');
}
?>