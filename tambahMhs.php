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
    <h3 style="text-align: center; padding-top: 20px;">Tambah Data Mahasiswa</h3>
    <form action="prosesTambahMhs.php" method="POST">
        Nama :
        <input type="text" name="nama" value="" class="form-control"> <br>
        NIM :
        <input type="text" name="nim" value="" class="form-control"> <br>
        Alamat :
        <input type="text" name="alamat" value="" class="form-control"> <br>
        Username :
        <input type="text" name="username" value="" class="form-control"> <br>
        Password :
        <input type="password" name="password" value="" class="form-control"> <br>

        Jurusan :
        <select name="id_jurusan" class="form-select form-control" aria-label=".form-select-sm example">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_jurusan = mysqli_query($conn, "SELECT * FROM t_jurusan");
            while ($data_jurusan = mysqli_fetch_array($qry_jurusan)) {
                echo '<option value="' . $data_jurusan['id_jurusan'] . '">' . $data_jurusan['nama_jurusan'] . '</option>';
            };
            ?>
        </select>
        <br><br>

        <!-- <input type="text" name="password" value="" class="form-control"> <br> -->

        <!-- button  -->
        <input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">
        <!-- kembali  -->
        <a href="dataMhs.php" style="float: right;" class="btn btn-success">Kembali</a>
        <!-- kembali  -->
        <!-- button  -->
        <br><br>
    </form>
</div>
<?php
include "footer.php";
?>