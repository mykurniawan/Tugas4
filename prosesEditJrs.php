<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_POST) {
    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];

    if (empty($nama_jurusan)) {
        echo "<script>alert('Nama jurusan tidak boleh kosong!!!'); location.href='editJurusan.php'</script>";
    } else {
        include "koneksi.php";
        $update = mysqli_query($conn, "UPDATE t_jurusan SET nama_jurusan = '" . $nama_jurusan . "' where id_jurusan = '" . $id_jurusan . "'  ") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update data jurusan!!!'); location.href='dataJurusan.php'</script>";
        } else {
            echo "<script>alert('Gagal update data jurusan!!!'); location.href='editJurusan.php'</script>";
        }
    }
}
