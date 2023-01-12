<?php
// titik digunakan untuk menyatukan teks
// pertemuan 2 - Latihan PHP
// sintaks PHP

// Standar Output
// echo, print
// print_r -> array
// var_dump 

// echo
//  echo "Wanda Khoirunnisa <br>";
//  echo "Ini ", "teks ", "yang ", "dipisah <br>";
//  echo "Ini "  . "Teks";

// // print (hanya bisa satu parameter)
// print "Wanda Khoirunnisa"
// print "Wanda" , "kh";

// print_r
// $nama_siswa = array ("Wanda, Nasywa", "teya");
// print_r ($nama_siswa);

// // var_dump
// var_dump ("wanda Khoirunnisa");

// Penulisan sintaks PHP
// 1.PHP didalam HTML
// 2.HTML didalam PHP

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <!-- 1. php didalam HTML -->
    <h1>Halo, Welcome <?php echo "Wanda"; ?></h1>
    <p><?php echo "Ini adalah paragraf"; ?></p>

    <!-- 2.HTML didalam PHP -->
    <?php
    echo "<h1>Welcome Wanda Khoirunnisa</h1>";
    ?>

    
</body>
</html>
