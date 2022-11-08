<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}

if ($_POST) {
    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    if (empty($nama_dosen)) {
        echo "<script>alert('Nama dosen tidak boleh kosong!!!'); location.href='editDosen.php'</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat dosen tidak boleh kosong!!!'); location.href='editDosen.php'</script>";
    } elseif (empty($telepon)) {
        echo "<script>alert('Telepon dosen tidak boleh kosong!!!'); location.href='editDosen.php'</script>";
    } else {
        include "koneksi.php";
        $update = mysqli_query($conn, "UPDATE t_dosen SET nama_dosen='" . $nama_dosen . "',
        alamat='" . $alamat . "',
        telepon='" . $telepon . "
        ' where id_dosen = '" . $id_dosen . " ' ") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update data Dosen!!!'); location.href='dataDosen.php'</script>";
        } else {
            echo "<script>alert('Gagal update data Dosen!!!'); location.href='editDosen.php'</script>";
        }
    }
}
