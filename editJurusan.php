<?php
session_start();
include "koneksi.php";
include "css.php";
include "navbar.php";

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}

$qry_get_jurusan = mysqli_query($conn, "SELECT * FROM t_jurusan WHERE id_jurusan = '" . $_GET['id_jurusan'] . "'");
$data_jurusan = mysqli_fetch_array($qry_get_jurusan);
?>

<div class="container">
    <h3 style="text-align: center; padding-top: 20px;">Edit Jurusan</h3>
    <form action="prosesEditJrs.php" method="POST">
        <input type="hidden" name="id_jurusan" value="<?= $data_jurusan['id_jurusan'] ?>">
        Nama :
        <input type="text" name="nama_jurusan" value="<?= $data_jurusan['nama_jurusan']?>" class="form-control"> <br>
        <br><br>


        <!-- button  -->
        <input type="submit" name="simpan" value="Edit Jurusan" class="btn btn-primary">
        <!-- kembali  -->
        <a href="dataJurusan.php" style="float: right;" class="btn btn-success">Kembali</a>
        <!-- kembali  -->
        <!-- button  -->
    </form> <br><br>
</div>
<?php 
include"footer.php";
?>