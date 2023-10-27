<?php

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$fullName = $_POST['full_name'];

if (empty($email) || empty($password)) {
    echo "email atau Password tidak boleh kosong";
}

$sql = "INSERT INTO users(email, password, full_name) VALUES ('$email', '$password', '$fullName')";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo 'Akun dengan email ' .  $email . ' berhasil dibuat';
    echo "<br>";
    echo '<a href="login.html">Kembali ke halaman login</a>';
} else {
    echo 'Akun gagal dibuat';
}