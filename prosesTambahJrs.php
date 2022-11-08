<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_POST) {
    $namaJurusan = $_POST['nama_jurusan'];

    if (empty($namaJurusan)) {
        echo "<script>alert('Nama jurusan tidak boleh kosong'); location.href='tambahJrs.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO t_jurusan(nama_jurusan) VALUE ('" . $namaJurusan . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan jurusan baru'); location.href='dataJurusan.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jurusan baru'); location.href='dataJurusan.php'</script>";
        }
    }
}
