<?php
// koneksi ke Database
// host , username admin, password, nama database
$conn = mysqli_connect("localhost", "root", "", "kuliner");

//ambil data di database
$result = mysqli_query($conn ,"SELECT * FROM kategori");
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
    <link rel="stylesheet"type="text/css" href="stylee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      

    <title>Daftar Makanan</title>
</head>
<body>
    <nav class ="nav-bar">
        <label class = "logo"> Wanda khoirunnisa</label>
        <ul>
        <li><a href="#home">Home</a></li>
            <li><a href="menu.php" target="blank">Menu</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

    <!-- <nav class="nav-bar">
        <label class="logo">Wanda Khoirunnisa</label>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="menu.php" target="blank">Menu</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav> -->
    <main>

        <section class="welcome" id="home">
       <center><h1>Welcome</h1></center> 
       <center><h2>Find a variety of foods from parts of the world</h2></center>
    </div>

    <section class="about"id="about">
        <center><h1>About</h1></center>
        
        <p>Culinary is a part of life that is closely related to daily food consumption. <br>
           Culinary can also be interpreted as processed products in the form of dishes. <br>
           and the dishes are in the form of side dishes, food / snacks and drinks.</p>
    </div>
    <div class="data-makanan">
    <!-- <h1>Daftar Makanan</h1>
    </div>
    <a href = "tambahdata.php">tambah data makanan</a> -->


    <!-- <table border="1" cellpadding="10" cellspacing="0">
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

            <?php 
            while($row = mysqli_fetch_assoc($result)): ?>
            <?php $i = 1?>
            <!-- <?php foreach($kategori as $row);?> -->

            <!-- <tr>

                <td><?= $row ["makanan_id"]?></td>
                <td><?php echo $row ["asal_makanan"]?></td>
                <td><?php echo $row ["nama_makanan"]?></td>
                <td><?php echo $row ["waktu_pembuatan"]?></td>
                <td><?= $row ["calories"]?></td>
                <td><?= $row ["tingkat_kesulitan"]?></td>
                <td><img src="<?=$row ["gambar"]?>"alt="" width="100"></td>
 --> -->
<!-- 
                <td>
                    <a href="">ubah</a>
                    <a href="hapusdata.php?id=<?=$row["makanan_id"];?>" onclick="return confirm('Yakin Diapus?')";>Hapus</a>

                     -->
                </td>
          </tr>
        <?php $i++?>
        <?php endwhile?> -->
    </table>

    <footer id="contact">
       <div class="footer-content">
        <div class="content-about">
            <center>
                <h2>My Contact</h2>
            </center>
    </div>
        <div class="content-social">
            <a href="https://dribbble.com/wandakh" target="_blank"><i class="fa-brands fa-square-dribbble" ></i>
            </a>
            <a href="https://github.com/wandakh"target="_blank"><i class="fa-brands fa-square-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/wanda-k-374777230/"target="_blank"><i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/wandaaaakh/"target="_blank"><i class="fa-brands fa-square-instagram"></i>
              
            </a> 
        </div>
        <div class="Footer-botton">
            &copy 2022 | design by Wanda Khoirunnisa

    </div>
    </footer>
    </main>

    

   
    
</body>
</html>