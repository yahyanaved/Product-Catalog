<?php
require 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT user_name,passphrase,permission FROM users WHERE user_name='$username';" ;
echo $sql;
$result = $link->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data =$row["user_name"];
        $data2 = $row["passphrase"];
        $data3 = $row["permission"];
    }
}
if($username==$data && $password == $data2 && $data3 == 'rw')
{
    header('location:productadmin.php');
}
else if($username==$data && $password == $data2 && $data3 == 'r')
{
    header('location:user.php');
}
else
{
    header('location:loginpage.php?login=0');
}
?>