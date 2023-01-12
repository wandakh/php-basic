<?php
require 'function.php';

$kategori = query("SELECT * FROM kategori");

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
    <link rel="stylesheet"type="text/css" href="stylee.css">
    
    <title>menu</title>


</head>
<body>
        
        <!-- <a href = "tambahdata.php">Tambah data makanan</a> -->
        <div class="tambahdaftarmakanan">
            <h1>Tambah Daftar Makanan</h1>
        </div>

        <form action ="<?php $_SERVER["PHP_SELF"]?>"method="post">

        asal makanan: <br> <br><input type="text" name="asal_makanan" required>
        <br> <br>
        nama makanan: <br> <br><input type="text" name="nama_makanan"required>
        <br> <br>
        waktu pembuatan:<br> <br><input type="text" name="waktu_pembuatan"required>
        <br> <br>
        calories:<br> <br><input type="text" name="calories"required>
        <br> <br>
        tingkat kesulitan :<br> <br><input type="text" name="tingkat_kesulitan"required>
        <br> <br>
        gambar: <br> <br><input type="text" name="gambar"required>
        <br> <br>
        <button type ="submit" name="submit">Tambah Data </button>
    </form>
       

    <div class="daftarmakanan">
         <h1>Daftar Makanan</h1>
    </div>        
     <table border="1" cellpadding="30" cellspacing="0">
        <tr>
            <th>makanan_id</th>
            <th>asal_makanan</th>
            <th>nama_makanan</th>
            <th>waktu_pembuatan</th>
            <th>calories</th>
            <th>tingkat_kesulitan</th>
            <th>gambar</th>
            <th>Aksi</th>
        </tr>

        
            <?php $i = 1?>
             <?php foreach($kategori as $row):?>

            <tr>

                <td><?= $row ["makanan_id"]?></td>
                <td><?php echo $row ["asal_makanan"]?></td>
                <td><?php echo $row ["nama_makanan"]?></td>
                <td><?php echo $row ["waktu_pembuatan"]?></td>
                <td><?= $row ["calories"]?></td>
                <td><?= $row ["tingkat_kesulitan"]?></td>
                <td><img src="<?=$row ["gambar"]?>"alt="" width="100"></td>
 

                <td>
                    <a href="">ubah</a>
                    <a href="hapusdata.php?id=<?=$row["makanan_id"];?>" onclick="return confirm('Yakin Diapus?')";>Hapus</a>
                </td>
          </tr>
        <?php $i++?>
        <?php endforeach?> 
    </table>
    
    
</body>
</html>