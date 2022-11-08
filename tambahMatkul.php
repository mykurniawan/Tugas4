<?php 
session_start();
include "css.php";
include "navbar.php";

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
?>

<div class="container">
    <h3 style="text-align: center; padding-top: 20px;">Tambah Matakuliah</h3>
    <form action="prosesTambahMatkul.php" method="POST">
        Nama :
        <input type="text" name="nama_matkul" value="" class="form-control"> <br>
        <br><br>

        <!-- button  -->
        <input type="submit" name="simpan" value="Tambah Matkul" class="btn btn-primary">
        <!-- kembali  -->
        <a href="dataMatkul.php" style="float: right;" class="btn btn-success">Kembali</a>
        <!-- kembali  -->
        <!-- button  -->
    </form><br><br><br><br><br>
</div>
<?php 
include"footer.php";
?>