<?php
include "css.php";
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
?>
<style>
    .navbar {
        background-image: linear-gradient(to right, #000000, #150050);
        position: sticky;
        top: 0;
        z-index: 10;
    }

    .logout {
        text-decoration: none;
        color: red;
    }
</style>
<!-- <div class="container"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> | <i>PERPUSUNIGA</i> | </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dataMhs.php">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dataDosen.php">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dataJurusan.php">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dataMatkul.php">Matakuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dataJadwalKuliah.php">Jadwal Kuliah</a>
                </li>
            </ul>

            <form class="d-flex">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button class="btn btn-light">
                    <a href="logout.php" class="logout" onclick="return confirm ('Apakah anda yakin keluar')">Logout</a>
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- </div> -->