<?php

include("config.php");

    $rpsId = $_POST['rps_id'];
    $judul = $_POST['judul'];
    $pertemuan = $_POST['pertemuan'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE rps SET pertemuan = '$pertemuan', judul='$judul', deskripsi='$deskripsi' WHERE id = '$rpsId'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ./list_matkul.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }