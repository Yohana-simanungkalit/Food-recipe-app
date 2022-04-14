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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/js" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/output.css">
    <title>weCan</title>
    <style>
        input{
            width: 100%;
            background-color: rgb(255, 255, 255);
        }

        #resep{
          margin-top:10px;
        }
    </style>

</head>
<body>
     <!-- Untuk mengatur koneksi dan 
    query ke database -->
    <?php
    include_once('koneksi.php');

    $reseps= mysqli_query($koneksi, "SELECT * FROM resepmakanan");
    ?>


    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="index.html" class="font-bold text-3xl text-primary block py-6">weCan!</a>
                </div>
                <div class="flex items-center px-4">
                    <nav id="nav-menu">
                        <li class="group">
                                <a href="index.html" class="text-2 mx-10 flex py-2 group-hover:text-pink-500" style="font-style:bold">Kembali Ke Halaman Utama</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <section id="artikel" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                <img src="dist/img/cook.png" alt="" width="w-full">
                    <h2 class="font-bold  text-3xl mb-4">Tambahkan Resep Makanan mu!</h2>
                    <p class="font-medium text-md  ">
                        Kamu dapat menambahkan resep makananmu sendiri melalui website weCan ini agar orang lain dapat melihatnya juga!
                    </p>
                </div>
            </div>
            <div class="container" style="margin-top:100px;">
            <a href="tambah_resep.php" class="btn btn-primary">Tambah Resep</a>
            <br><br>
            <div class="w-full px-4 flex flex-wrap justify-center">
                <?php while($resep = mysqli_fetch_array($reseps)) : ?>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="dist/img/yohana.png" alt="" width="w-full">
                        </div>
                        <h2 class="font-semibold text-xl mt-5 mb-3"><?php echo $resep['nama_penulis']; ?> | <?php echo $resep['judul_makanan']; ?></h3>
                        <h3><span style="color:red; font-size:20px">Bahan: </span> <?php echo $resep['bahan']; ?></h3>
                        <br>
                        <h3><span style="color:red; font-size:20px">Langkah-langkah: </span> <?php echo $resep['langkah-langkah']; ?></h3>
                        <a href="delete_resep.php?id=<?php echo $resep['id']; ?>" class="btn btn-danger" onclick = "return confirm('Yakin ingin menghapus?'); ">Hapus</a>
                    </div>
                 <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- End  -->
    </div>
    <script src="dist/js/script.js"></script>
    <script src="./anime.min.js"></script>
    <script src="dist/js/script2.js"></script>
</body>
</html>

</script>