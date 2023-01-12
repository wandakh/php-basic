<?php
require 'function.php';

$siswi = query("SELECT * FROM siswi");



// var_dump($result);


// if(!$result){;
//     echo mysqli_error($conn);
// }

// ambil data siswan dari object result(fetch) ada 4 cara

// mysqli_fetch_row() -> array numerik
// $si = mysqli_fetch_row($result);
// var_dump($si);

//  mysqli_fetch_assoc() -> array assoisiatif
// $si = mysqli_fetch_assoc($result);
// var_dump($si["jurusan"]);

//  mysqli_fetch_array() -> numerik/assosiatif
// $si = mysqli_fetch_array($result);
// var_dump($si["jurusan"]);

// mysqli_fetch_object() -> objact
// $si = mysqli_fetch_object($result);
// var_dump($si ->nama);

// while($si = mysqli_fetch_assoc($result)){
//     var_dump($si);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makakan</title>
</head>
<body>
    <h1>Daftar Makanan</h1>
    <a href="tambahdata.php">Tambah Data Siswa</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
            <?php $i=1 ?>
            <?php foreach($siswi as $row): ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row ["nama"]?></td>
                <td><?php echo $row ["nis"]?></td>
                <td><?= $row ["email"]?></td>
                <td><?= $row ["jurusan"]?></td>
                <td><img src="img/<?=$row ["gambar"]?>"alt="" width="100"></td>
                <td>
                    <a href="">ubah</a>
                    <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Diapus?')";>Hapus</a>

                    
                </td>
            </tr>
        </tr>
        <?php $i++?>
        <?php endforeach?>
    </table>
    
</body>
</html>