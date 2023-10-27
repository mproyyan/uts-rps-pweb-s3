<?php

include 'config.php';

$matkul = $_POST['matkul'];
$deskripsi = $_POST['deskripsi'];

if (empty($matkul) || empty($deskripsi)) {
    echo "matkul atau deskripsi tidak boleh kosong";
    die;
}

$sql = "INSERT INTO mata_kuliah(matkul, deskripsi) VALUES ('$matkul', '$deskripsi')";
$query = mysqli_query($conn, $sql);

if ($query) {
    header("location:./list_matkul.php");
} else {
    header("location:./list_matkul.php?app=error");
}