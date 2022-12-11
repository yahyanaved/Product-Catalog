<?php
    require_once "config.php"; 
    //mysqli_select_db($link,'storecatalog');
    $username= $_POST['username'];
    $password = $_POST['password'];
    $s_name = $_POST['s_name'];
    $store_desc = $_POST['store_desc'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $data = "INSERT INTO stores (s_name,address,email,store_desc) values ('$s_name','$address','$email','$store_desc')";
    mysqli_query($link, $data);
    $query = "SELECT store_id from stores where s_name = '{$s_name}'";
    $result = mysqli_query($link, $query);
    $bid = mysqli_fetch_assoc($result);
    if(is_null($bid['store_id']))
    {
        header("location: error.php");
    }
    $data = "INSERT INTO users (user_name,passphrase,permission,store_id) VALUES ('$username','$password','rw','$bid[store_id]')";
    mysqli_query($link, $data);
    header('location:loginpage.php')
?>