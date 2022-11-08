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
    <!-- <h1>Halaman Admin</h1> -->
    <h3>Halo <i style="color: #150050;"><?php echo $_SESSION['username']; ?></i> <br> Anda telah login sebagai
        <i style="color: #150050;"><?php echo $_SESSION['level']; ?></i>
    </h3>
    <hr>
    <h3 style="text-align: center; padding-top: 20px;">Data Mahasiswa</h3> <br>
    <p style="float: right;">
        <!-- tombol tambahMhs.php  -->

        <a href="tambahMhs.php" class="btn btn-primary">Tambah Mahasiswa</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_mahasiswa = mysqli_query($conn, "SELECT * FROM t_mahasiswa JOIN t_jurusan ON t_jurusan.id_jurusan = t_mahasiswa.id_jurusan");
            $no = 0;
            while ($data_mahasiswa = mysqli_fetch_array($qry_mahasiswa)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_mahasiswa['nama'] ?></td>
                    <td><?= $data_mahasiswa['nim'] ?></td>
                    <td><?= $data_mahasiswa['alamat'] ?></td>
                    <td><?= $data_mahasiswa['username'] ?></td>
                    <td><?= $data_mahasiswa['password'] ?></td>

                    <!-- ambil data dari tabel t_jurusan  -->
                    <td><?= $data_mahasiswa['nama_jurusan'] ?></td>
                    <td>
                        <a href="editMhs.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" class="btn btn-success">Edit</a> |
                        <a href="deleteMhs.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table> <br><br>
</div>
<?php
include "footer.php";
?>