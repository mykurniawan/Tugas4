<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
if ($_POST) {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
    $id_jurusan = $_POST['id_jurusan'];

    if (empty($nama)) {
        echo "<script>alert('nama mahasiswa tidak boleh kosong'); location.href='editMhs.php';</script>";
    } else if (empty($nim)) {
        echo "<script>alert('nim mahasiswa tidak boleh kosong'); location.href='editMhs.php';</script>";
    } else if (empty($alamat)) {
        echo "<script>alert('alamat mahasiswa tidak boleh kosong'); location.href='editMhs.php';</script>";
    } else if (empty($username)) {
        echo "<script>alert('username mahasiswa tidak boleh kosong'); location.href='editMhs.php';</script>";
    } else if (empty($password)) {
        echo "<script>alert('password mahasiswa tidak boleh kosong'); location.href='editMhs.php';</script>";
    } else{
        include "koneksi.php";
        if (empty($id_jurusan)) {
            $update = mysqli_query($conn, "UPDATE t_mahasiswa SET nama='" . $nama . "',
                                                                  nim='" . $nim . "',
                                                                  alamat='" . $alamat . "',
                                                                  username='" . $username . "',
                                                                  password='" . $password . ",
                                                                  id_jurusan= '".$id_jurusan."'
                where id_mahasiswa = '" . $id_mahasiswa . " ' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update data mahasiswa'); location.href='dataMhs.php';</script>";
            } else {
                echo "<script>alert('gagal update data mahasiswa'); location.href='editMhs.php?id_mahasiswa=" . $id_mahasiswa . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "UPDATE t_mahasiswa SET nama='" . $nama . "', 
                                                                  nim='" . $nim . "', 
                                                                  alamat='" . $alamat . "', 
                                                                  username='" . $username . "',
                                                                  password='" . $password . " ', 
                                                                  id_jurusan= '".$id_jurusan."'
                 where id_mahasiswa = '" . $id_mahasiswa . " ' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update data mahasiswa'); location.href='dataMhs.php';</script>";
            } else {
                echo "<script>alert('gagal update data mahasiswa'); location.href='editMhs.php?id_mahasiswa=" . $id_mahasiswa . "';</script>";
            }
        }
    }
    
}
