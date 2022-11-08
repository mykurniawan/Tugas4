<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_POST) {
    $id_matkul = $_POST['id_matkul'];
    $nama_matkul = $_POST['nama_matkul'];

    if (empty($nama_matkul)) {
        echo "<script>alert('Nama matakuliah tidak boleh kosong'); location.href='editMatkul.php'</script>";
    } else {
        include "koneksi.php";
        $update = mysqli_query($conn, "UPDATE t_matakuliah SET nama_matkul = '" . $nama_matkul . "' where id_matkul = '" . $id_matkul . "'  ") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses edit matakuliah'); location.href='dataMatkul.php'</script>";
        } else {
            echo "<script>alert('Gagal edit matakuliah'); location.href='dataMatkul.php'</script>";
        }
    }
}