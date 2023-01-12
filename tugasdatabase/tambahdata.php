<?php
require 'function.php';

if (isset($_POST["submit"])){
    if(tambahdata($_POST) > 0){
        // echo "Data berhasil ditambahkan";
        echo "<script>
            alert ('data berhasil ditambahkan');
            document.location.href='menu.php';
        </script>";
    } else {
        // echo "Data gagal ditambahkan";
        echo "<script>
        alert ('data gagal ditambahkan');
        document.location.href='menu.php';
    </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Makanan</title>
</head>
<body>
    <h1>tambah Data Makanan</h1>


    <form action ="<?php $_SERVER["PHP_SELF"]?>"method="post">
    asal makanan: <input type="text" name="asal_makanan" required>
    <br><br>
    nama makanan: <input type="text" name="nama_makanan"required>
    <br><br> 
    waktu pembuatan: <input type="text" name="waktu_pembuatan"required>
    <br><br> 
    calories: <input type="text" name="calories"required>
    <br><br>
    tingkat kesulitan : <input type="text" name="tingkat_kesulitan"required>
    <br><br>
    gambar : <input type="text" name="gambar"required>
    <br><br>
    <button type ="submit" name="submit">Tambah Data</button>
    
  
    
</body>
</html>