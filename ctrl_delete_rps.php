<?php

include("config.php");

$id = $_GET['id'];
$hasil = mysqli_query($conn, "DELETE FROM rps WHERE id=$id");

if ($hasil) {
    echo '<h1>Data RPS berhasil dihapus</h1>';
    echo '<a href="list_matkul.php">Kembali</a>';
} else {
    echo '<h1>Data gagal dihapus</h1>';
}