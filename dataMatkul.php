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
    <h3 style="text-align: center; padding-top: 20px;">Data Matakuliah</h3> <br>
    <p style="float: right;"">
        <!-- tombol tambahMhs.php  -->
        <a href="tambahMatkul.php" class="btn btn-primary">Tambah Matkul</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA MATKUL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_matkul = mysqli_query($conn, "SELECT * FROM t_matakuliah");
            
            $no = 0; 
            while($data_matkul = mysqli_fetch_array($qry_matkul)){
                $no++   ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_matkul['nama_matkul'] ?></td>
                    <td>
                        <a href="editMatkul.php?id_matkul= <?= $data_matkul['id_matkul'] ?>" class="btn btn-success">Edit</a> |
                        <a href="deleteMatkul.php?id_matkul= <?= $data_matkul['id_matkul'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php 
            
            }
            ?>    
        </tbody>
    </table><br><br>
</div>
<?php 
include"footer.php";
?>