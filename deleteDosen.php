<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_GET['id_dosen']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM t_dosen WHERE id_dosen = '" . $_GET['id_dosen'] . "' ");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data dosen'); location.href='dataDosen.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus data dosen'); location.href='dataDosen.php'</script>";
    }
}
