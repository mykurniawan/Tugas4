<?php 
session_start();
include "koneksi.php";
// menangkap data yang dikirim dari form login 
$username = $_POST['username'];
$password = $_POST['password'];
// mengambil data dari tabel user (username dan password)
$login = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login); //menghitung jumlah data yang ditemukan

// cek usernamen dan password di db 
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    // login sebagai admin 
    if($data['level']=="admin"){
        $_SESSION['username'] = $username; //session login dan username
        $_SESSION['level'] ="admin";
        // alihkan ke halaman utama
        header("location:dataMhs.php");
    
        //jika user login sebagai pegawai
    }else if($data['petugas']=="petugas"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] ="petugas";
        // alihkan ke halaman petugas 
        header("location:halamanPetugas.php");
        
    }else{
        // alihkan ke halaman login 
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}
