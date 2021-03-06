<?php
require 'function.php';
$idbarang = $_GET['idbarang'];
$barangg = query("SELECT * FROM barang WHERE idbarang = $idbarang");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

    <title>Detail Barang</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
       
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">TOKO Kuh</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="tambahbarang.php">Input barang</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="barang.php">Data Barang</a>
                    </li>
                </ul>
                </div>
            </div>
         </nav>

    <div class="row mt-5">
        <div class="col-md-15 p-5 pt-2">
            <!-- konten -->
            <h3><i class="fas fa-users"></i>Detail Data Barang Toko Kuh </h3>
            <hr>
            <ul class="list-group">
                <li class="list-group-item"><img src="images/<?= $barangg['foto']; ?>.png" width="400px"></li>
                <li class="list-group-item active"><?= $barangg['namabarang']; ?></li>
                <li class="list-group-item"><?= $barangg['idbarang']; ?></li>
                <li class="list-group-item"><?= $barangg['stok']; ?></li>
                <li class="list-group-item"><?= $barangg['harga']; ?></li>
                <li class="list-group-item">  
                    <a href="editbarang.php?idbarang=<?= $barangg['idbarang']; ?>" class="btn btn-warning" role="button">Edit</a>        
                    <a href="hapus.php?idbarang=<?= $barangg['idbarang']; ?>" onclick="return confirm('apakah anda akan menghapus data ini');" class="btn btn-danger" role="button">Hapus</a>
                    <a href="barang.php" class="btn btn-primary" role="button">Kembali</a>
                </li>
            </ul>


        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>