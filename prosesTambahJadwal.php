<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_POST) {
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $id_matkul = $_POST['id_matkul'];
    $id_dosen = $_POST['id_dosen'];
    
    if (empty($hari)) {
        echo "<script>alert('hari jadwal tidak boleh kosong'); location.href='tambahJadwal.php'</script>";
    } elseif (empty($jam)) {
        echo "<script>alert('jam tidak boleh kosong'); location.href='tambahJadwal.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO t_jadwal_kuliah (hari, jam, id_matkul, id_dosen)
        VALUES ('" . $hari . " ','". $jam. "',' " . $id_matkul . " ','" . $id_dosen . "')") or die(mysqli_error($conn));
    
        if ($insert) {
            echo "<script>alert('Sukses menambahkan jadwal baru');location.href='dataJadwalKuliah.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jadwal baru');location.href='tambahJadwal.php'</script>";
        }
    }
}