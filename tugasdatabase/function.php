<?php

// koneksi ke Database
// host , username admin, password, nama database
$conn = mysqli_connect("localhost", "root", "", "kuliner");

function query($query){
    global $conn;
    //ambil data di database
$result = mysqli_query($conn ,$query);
$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;

}
return $rows;
}

function tambahData($data){
    global $conn;
    $asal_makanan = htmlspecialchars($data ["asal_makanan"]);
    $nama_makanan = htmlspecialchars ($data ["nama_makanan"]);
    $waktu_pembuatan = htmlspecialchars($data ["waktu_pembuatan"]);
    $calories = htmlspecialchars($data ["calories"]);
    $tingkat_kesulitan = htmlspecialchars($data ["tingkat_kesulitan"]);
    $gambar = htmlspecialchars($data ["gambar"]);


    $query = "INSERT INTO kategori VALUES ( '$asal_makanan','$nama_makanan',' $waktu_pembuatan','$calories ',' $tingkat_kesulitan','$gambar','')";
    mysqli_query($conn, $query);
    

    return mysqli_affected_rows($conn);

}
function hapusData($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM kategori WHERE makanan_id = $id");

    return mysqli_affected_rows($conn);
}


?>