<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_GET['id_mahasiswa']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM t_mahasiswa WHERE id_mahasiswa = '" . $_GET['id_mahasiswa'] . "'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data mahasiswa'); location.href='dataMhs.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus data mahasiswa'); location.href='dataMhs.php'</script>";
    }
}