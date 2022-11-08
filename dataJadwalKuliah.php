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
    <h3 style="text-align: center; padding-top: 20px;">Data Jadwal Kuliah</h3> <br>
    <p style="float: right;">
        <!-- tombol tambahMhs.php  -->
        <a href="tambahJadwal.php" class="btn btn-primary">Tambah Jadwal Kuliah</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>HARI</th>
                <th>JAM</th>
                <th>Matkul</th>
                <th>Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "koneksi.php";
            $qry_jadwal_kuliah = mysqli_query($conn, "SELECT * FROM t_jadwal_kuliah 
            INNER JOIN t_matakuliah  ON t_matakuliah.id_matkul = t_jadwal_kuliah.id_matkul 
            INNER JOIN t_dosen ON t_dosen.id_dosen = t_jadwal_kuliah.id_dosen");
            $no = 0;
            while ($data_jadwal = mysqli_fetch_array($qry_jadwal_kuliah)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_jadwal['hari'] ?></td>
                    <td><?= $data_jadwal['jam'] ?></td>
                    <td><?= $data_jadwal['nama_matkul'] ?></td>
                    <td><?= $data_jadwal['nama_dosen'] ?></td>
                    <td>
                    <a href="editJadwal.php?id_jadwal= <?= $data_jadwal['id_jadwal'] ?>" class="btn btn-success">Edit</a> |

                    <a href="deleteJadwal.php?id_jadwal= <?= $data_jadwal['id_jadwal'] ?>" class="btn btn-danger">Delete</a>

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