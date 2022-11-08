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
    <h3 style="text-align: center; padding-top: 20px;">Data Dosen</h3> <br>
    <p style="float: right;">
        <!-- tombol tambahMhs.php  -->
        <a href="tambahDosen.php" class="btn btn-primary">Tambah Dosen</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_dosen = mysqli_query($conn, "SELECT * FROM t_dosen");
            
            $no = 0; 
            while($data_dosen = mysqli_fetch_array($qry_dosen)){
                $no++   ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_dosen['nama_dosen'] ?></td>
                    <td><?= $data_dosen['alamat'] ?></td>
                    <td><?= $data_dosen['telepon'] ?></td>
                    <td>
                        <a href="editDosen.php?id_dosen= <?= $data_dosen['id_dosen'] ?>" class="btn btn-success">Edit</a> |
                        <a href="deleteDosen.php?id_dosen= <?= $data_dosen['id_dosen'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php 
            
            }
            ?>    

          
        </tbody>
    </table> <br><br>
</div>

<?php 
include"footer.php";
?>