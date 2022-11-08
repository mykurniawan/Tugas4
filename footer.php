<?php
include "css.php";
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
?>
<style>
    /* footer  */
#footer {
    background-image: linear-gradient(to right, #000000, #150050);
}

.footer-box {
    padding: 20px;
}

.footer-box a {
    width: 120px;
    margin-bottom: 20px;
}

.footer-box p {
    color: white;
}

.footer-box .fa {
    margin-right: 8px;
    font-size: 20px;
    height: 20px;
    width: 20px;
    text-align: center;
    padding-top: 7px;
    border-radius: 2px;
}
</style>
<!-- footer  -->
<section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box text-left">
          <h1 style="color: white; font-size: 20px;">Perpusuniga</h1>
          <p style="font-size: small;">Ayo belajar skill baru untuk mendapatkan pekerjaan yang lebih baik</p>
          <hr style="color: aliceblue;">
        </div>
        <div class="col-md-4 footer-box text-center">
          <h1 style="color: white; font-size: 20px;">Copyright</h1>
          <p>@M. Yoga Kurniawan</p>
          <p>21510011</p>
          <p>Universitas Gajayana Malang</p>
          <hr>
        </div>
        <div class="col-md-4 footer-box text-right">
          <h1 style="color: white; font-size: 20px;">Contact</h1>
          <p style="font-size: small;">+6285-649-364-762 <i class="fa fa-phone"></i></p>
          <p style="font-size: small;">kurniawan.y09a@gmail.com <i class="fa fa-envelope-o"></i></p>
          <p style="font-size: small;">Kediri, Jatim Indonesia <i class="fa fa-map-marker"></i></p>
        </div>
      </div>
      <!-- <hr> -->
      <!-- <p style="color: aliceblue; font-size: 13px;">Visit ig : emykurniawan__ / bukukamu.my.id</p> -->
    </div>
  </section>
  <!-- footer  -->
