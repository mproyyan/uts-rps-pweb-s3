<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "uts_pweb";
$port = 3306;

$conn = mysqli_connect($server, $user, $password, $db, $port);
if (!$conn) {
    die(mysqli_connect_error());
}