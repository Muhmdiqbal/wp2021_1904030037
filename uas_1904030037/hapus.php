<?php
  require 'function.php';

  //agar tidak bisa masuk ke pengetikan manual pada url
  if(!isset($_GET['idbarang'])){
    header('location: index.php');
    exit;
  }


  $id = $_GET['idbarang'];
  if(hapus($idbarang)){
    echo "
            <script>
            alert('data berhasil dihapus..!');
            document.location.href= 'barang.php'
            </script>
            ";

  }else{
    echo "
            <script>
            alert('data gagal dihapus ');
            </script>
            ";


  }
    
?>