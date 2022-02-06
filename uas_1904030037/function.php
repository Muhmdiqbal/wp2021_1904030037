<?php

    $conn = mysqli_connect('localhost','root','','uas_1904030037');

    //pemanggilan tabel

    function query($query)
    {
        global $conn;

        //mengambil seluruh data pada tabel
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) ==1 ){
            return mysqli_fetch_assoc($result);
        }

        //pemanggilan elemen data dengan rapih
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah($data)
    {
          global $conn;
              $idbarang = htmlspecialchars($data['idbarang']);
              $namabarang     = htmlspecialchars ($data['namabarang']);
              $foto   = htmlspecialchars ($data['foto']);
              $stok   = htmlspecialchars ($data['stok']);
              $harga   = htmlspecialchars($data['harga']);

        $query = "INSERT INTO barang 
                 VALUES
              ('$idbarang','$namabarang','$foto','$stok','$harga');";

                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }

    function tambahkomen($data)
    {
          global $conn;
              $id = htmlspecialchars($data['id']);
              $username     = htmlspecialchars ($data['username']);
              $komentar   = htmlspecialchars ($data['komentar']);

        $query = "INSERT INTO comment 
                 VALUES
              ('$id','$username','$komentar');";

                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }
   



    function hapus($idbarang)
    {
        global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE idbarang= $idbarang") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
    }

    
    function hapusmapel($id)
    {
        global $conn;
    mysqli_query($conn, "DELETE FROM mata_pel WHERE id= $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
    }

    // function hapusdosen($nidn)
    // {
    //     global $conn;
    // mysqli_query($conn, "DELETE FROM dosen WHERE nidn= $nidn") or die(mysqli_error($conn));
    // return mysqli_affected_rows($conn);
    // }

    function edit($data)
    {
          global $conn;
              $idbarang = $data['idbarang'];
              $namabarang     = htmlspecialchars ($data['namabarang']);
              $foto     = htmlspecialchars($data['foto']);
              $stok   = htmlspecialchars ($data['stok']);
              $harga   = htmlspecialchars ($data['harga']);

        $query = "UPDATE barang SET 
                namabarang ='$namabarang',
                foto ='$foto',
                stok ='$stok',
                harga ='$harga'
                WHERE idbarang =$idbarang;";
 
                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }

    function editmapel($data)
    {
          global $conn;
              $id = $data['id'];
              $mapel     = htmlspecialchars ($data['mapel']);
              $jurusan   = htmlspecialchars ($data['jurusan']);
              $guru   = htmlspecialchars ($data['guru']);
              $kelas   = htmlspecialchars($data['kelas']);

        $query = "UPDATE mata_pel SET 
                mapel ='$mapel',
                jurusan ='$jurusan',
                guru ='$guru',
                kelas ='$kelas'
                WHERE id =$id;";
                 
              

                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }

    function caribarang($keyword)
    {
             global $conn;

        $query = "SELECT * FROM barang WHERE namabarang LIKE'%$keyword%'";
        $result = mysqli_query($conn, $query); 
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
        return $rows;

    }

    function caridatabarang($keyword)
    {
             global $conn;

        $query = "SELECT * FROM barang WHERE namabarang LIKE'%$keyword%'";
        $result = mysqli_query($conn, $query); 
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
        return $rows;

    }
    






?>