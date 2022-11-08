<?php
session_start();
include "css.php";
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_GET['id_jadwal']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM t_jadwal_kuliah WHERE id_jadwal = '" . $_GET['id_jadwal'] . "'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data jadwal'); location.href='dataJadwalKuliah.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus data jadwal'); location.href='dataJadwalKuliah.php'</script>";
    }
}