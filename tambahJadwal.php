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
    <h3 style="text-align: center; padding-top: 20px;">Tambah Jadwal Kuliah</h3>
    <form action="prosesTambahJadwal.php" method="POST">
        Hari :
        <!-- <input type="text" name="hari" value="" class="form-control"> <br> -->
        <select name="hari" class="form-select form-control" aria-label=".form-select-sm example">
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
        </select>

        Jam :
        <input type="time" name="jam" value="" class="form-control"> <br>

        Mata Kuliah :
        <select name="id_matkul" class="form-select form-control" aria-label=".form-select-sm example">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_matakuliah = mysqli_query($conn, "SELECT * FROM t_matakuliah");
            while ($data_matkul = mysqli_fetch_array($qry_matakuliah)) {
                echo '<option value="' . $data_matkul['id_matkul'] . '">' . $data_matkul['nama_matkul'] . '</option>';
            };
            ?>
        </select>

        Dosen :
        <select name="id_dosen" class="form-select form-control" aria-label=".form-select-sm example">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_dosen = mysqli_query($conn, "SELECT * FROM t_dosen");
            while ($data_dosen = mysqli_fetch_array($qry_dosen)) {
                echo '<option value="' . $data_dosen['id_dosen'] . '">' . $data_dosen['nama_dosen'] . '</option>';
            };
            ?>
        </select>
        <br><br>

        <!-- button  -->
        <input type="submit" name="simpan" value="Tambah Jadwal" class="btn btn-primary">
        <!-- kembali  -->
        <a href="dataJadwalKuliah.php" style="float: right;" class="btn btn-success">Kembali</a>
        <!-- kembali  -->
        <!-- button  -->
        <br><br>
    </form>
</div>

<?php
include "footer.php";
?>