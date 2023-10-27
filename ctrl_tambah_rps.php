<?php

include 'config.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$matkulId = $_POST['matkul_id'];
$pertemuan = $_POST['pertemuan'];

if (empty($judul) || empty($deskripsi)) {
    echo "judul atau deskripsi tidak boleh kosong";
    die;
}

$sql = "INSERT INTO rps(judul, deskripsi, matkul_id, pertemuan) VALUES ('$judul', '$deskripsi', '$matkulId', '$pertemuan')";
$query = mysqli_query($conn, $sql);

if ($query) {
    header("location:./list_rps.php?id=" . $matkulId);
} else {
    header("location:./list_rps.php?app=error&id=" . $matkulId);
}