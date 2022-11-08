<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_POST) {
    $namaDosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    if (empty($namaDosen)) {
        echo "<script>alert('Nama dosen tidak boleh kosong'); location.href='tambahDosen.php'</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat dosen tidak boleh kosong'); location.href='tambahDosen.php'</script>";
    } elseif (empty($telepon)) {
        echo "<script>alert('Telepon dosen tidak boleh kosong'); location.href='tambahDosen.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO t_dosen(nama_dosen, alamat, telepon) 
        VALUE ('" . $namaDosen . "','" . $alamat . "','" . $telepon . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan dosen baru'); location.href='dataDosen.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan dosen baru'); location.href='tambahDosen.php'</script>";
        }
    }
}
