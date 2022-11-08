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
    <h3 style="text-align: center; padding-top: 20px;">Data Jurusan</h3> <br>
    <p style="float: right;">
        <!-- tombol tambahMhs.php  -->
        <a href="tambahJrs.php" class="btn btn-primary">Tambah Jurusan</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_jurusan = mysqli_query($conn, "SELECT * FROM t_jurusan");
            
            $no = 0; 
            while($data_jurusan = mysqli_fetch_array($qry_jurusan)){
                $no++   ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_jurusan['nama_jurusan'] ?></td>
                    <td>
                        <a href="editJurusan.php?id_jurusan= <?= $data_jurusan['id_jurusan'] ?>" class="btn btn-success">Edit</a> |
                        <a href="deleteJurusan.php?id_jurusan= <?= $data_jurusan['id_jurusan'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
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