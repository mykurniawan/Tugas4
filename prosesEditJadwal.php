<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_POST) {
    $id_jadwal = $_POST['id_jadwal'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $matkul = $_POST['id_matkul'];
    $dosen = $_POST['id_dosen'];

    if (empty($hari)) {
        echo "<script>alert('Hari tidak boleh kosong!!!'); location.href='editJadwal.php'</script>";
    } elseif (empty($jam)) {
        echo "<script>alert('Jam tidak boleh kosong!!!'); location.href='editJadwal.php'</script>";
    } 
    elseif (empty($matkul)) {
        echo "<script>alert('Matkul tidak boleh kosong!!!'); location.href='editJadwal.php'</script>";
    }
    elseif (empty($dosen)) {
        echo "<script>alert('Dosen tidak boleh kosong!!!'); location.href='editJadwal.php'</script>";
    }
     else {
        include "koneksi.php";
        $update = mysqli_query($conn, "UPDATE t_jadwal_kuliah SET hari='" . $hari . "',
                                                                  jam='" . $jam . "',
                                                                  id_matkul = '".$matkul."',
                                                                  id_dosen = '".$dosen."' 
                                                                  where id_jadwal = '" . $id_jadwal . "' ") 
                                                                  or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update data Jadwal!!!'); location.href='dataJadwalKuliah.php'</script>";
        } else {
            echo "<script>alert('Gagal update data Jadwal!!!'); location.href='editJadwal.php'</script>";
        }
    }
}
