<?php 
session_start();
include "koneksi.php";
include "css.php";
include "navbar.php";

//cek apakah yang mengakses sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
$qry_get_matakuliah = mysqli_query($conn, "SELECT * FROM t_matakuliah WHERE id_matkul = '" . $_GET['id_matkul'] . "'");
$data_matkul = mysqli_fetch_array($qry_get_matakuliah);
?>

<div class="container">
    <h3 style="text-align: center; padding-top: 20px;">Edit Matakuliah</h3>
    <form action="prosesEditMatkul.php" method="POST">
    <input type="hidden" name="id_matkul" value="<?= $data_matkul['id_matkul'] ?>" class="form-control"> <br>

        Nama :
        <input type="text" name="nama_matkul" value="<?= $data_matkul['nama_matkul'] ?>" class="form-control"> <br>
        <br><br>

        <!-- button  -->
        <input type="submit" name="simpan" value="Edit Matkul" class="btn btn-primary">
        <!-- kembali  -->
        <a href="dataMatkul.php" style="float: right;" class="btn btn-success">Kembali</a>
        <!-- kembali  -->
        <!-- button  -->
    </form> <br><br>
</div>

<?php 
include"footer.php";
?>