<?php
session_start();

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
// mengaktifkan session 
session_start();
// mengakhiri session 
session_destroy();
// arahkan ke index.php 
header("location:index.php");
