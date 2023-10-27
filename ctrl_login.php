<?php

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    session_start();
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    $result = mysqli_num_rows($query);
    
    if ($result > 0) {
        header("location:./list_matkul.php");
    } else {
        header("location:./login.php?app=error");
    }
}