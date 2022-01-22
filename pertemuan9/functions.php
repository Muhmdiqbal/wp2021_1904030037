<<?php
$conn = mysqli_connect('localhost','root','','wpsmt5');

//pemanggilan tabel
function query($query)
{
    global $conn;

    //mengambil seluruh data
    $result = mysqli_query($conn, $query);

    //pemanggilan elemen data dengan rapih
    $rows = [];
    while ($row =mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
