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
    <h3 style="text-align: center; padding-top: 20px;">Tambah Dosen</h3>
    <form action="prosesTambahDsn.php" method="POST">
        Nama :
        <input type="text" name="nama_dosen" value="" class="form-control"> <br>
        ALAMAT :
        <input type="text" name="alamat" value="" class="form-control"> <br>
        TELEPON :
        <input type="text" name="telepon" value="" class="form-control"> <br>
        <br><br>

        <!-- button  -->
        <input type="submit" name="simpan" value="Tambah Dosen" class="btn btn-primary">
        <!-- kembali  -->
        <a href="dataDosen.php" style="float: right;" class="btn btn-success">Kembali</a>
        <!-- kembali  -->
        <!-- button  -->
    </form> <br><br>
</div>
<?php 
include"footer.php";
?>