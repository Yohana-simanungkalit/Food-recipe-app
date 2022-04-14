<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <!-- Other tags -->
      <meta name="dicoding:email" content="yohanabangkit@gmail.com">
      <!-- Other tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>weCan </title>
</head>
<body>

    <!-- Untuk mengatur koneksi dan 
    query ke database shoshop -->
    <?php
    
    include_once('koneksi.php');
    $kueri = "SELECT * FROM resepmakanan";
    $reseps = mysqli_query($koneksi,$kueri);    
    ?>

    <!-- Tabel barang -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background-color: teal; height:50px">
    <div class="container-fluid">
    <a class="navbar-brand" href="resep.php">weCan</a>
  </div>
    </nav>
    <div class="container" style="margin-top:100px;">
    <div class="col-6">
    <!-- Form Tambah Data -->
    <h3>Form Tambah Resep Makanan</h3>
    <br>
      <form action="tambah_resep.php" method="post">
          <div class="mb-3">
              <label for="namas_penulis" class="form-label">Nama Penulis</label>
              <input type="text" class="form-control" id="nama_penulis" name="namas" required>
          </div>
          <div class="mb-3">
              <label for="judul_masakan" class="form-label">Judul Masakan</label>
              <input type="text" class="form-control" id="judul_masakan" name="juduls" required>
          </div>
          <div class="mb-3">
              <label for="bahan" class="form-label">Bahan</label>
              <textarea  class="form-control" id="bahan" name="bahans" required></textarea> 
          </div>
          <div class="mb-3">
              <label for="langkah_langkah" class="form-label">Langkah Langkah</label>
              <textarea  class="form-control" id="langkah_langkah" name="langkas" required></textarea>
          </div>
          <button class="btn btn-primary" type="submit" name="submit" onclick="return confirm('Apakah anda sudah yakin?')">
              Simpan Data
          </button>
          <a href="resep.php" class="btn btn-dark">Kembali</a>
          </div>
      </form>
    </div>
    <br>
</body>
</html>

<!-- Untuk menyimpan data inputan sementara ke variabel -->
<?php

    if (isset($_POST['submit'])){
        $namaPenulis = $_POST['namas'];
        $judulMakanan = $_POST['juduls'];
        $bahan = $_POST['bahans'];
        $langkah = $_POST['langkas'];

        include_once('koneksi.php');
        $insert = mysqli_query($koneksi, "INSERT INTO resepmakanan VALUES(' ','$namaPenulis', '$judulMakanan', '$bahan', '$langkah')");

        $done = true;


        if ($done)
        {
          echo "<script>window.location.href='resep.php';</script>";
          exit;
        }
    }