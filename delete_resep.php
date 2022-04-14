<?php
    include_once('koneksi.php');

    $id_resep = $_GET['id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM resepmakanan WHERE id = '$id_resep' ");

    header("Location: resep.php");

?>