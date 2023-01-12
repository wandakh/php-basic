<?php

#############
# pertemuan : 3
# Name file : Konstanta.php
#############

// echo "Menghitung Volume Bola\n";
// echo "----------------------\n";

// // Menggunakan const
// const PI = 3.14;
// echo "Masukan Jari-jari Bola : " ;
// $r = fgets (STDIN);
// $volume = PI * $r * $r *$r;
// echo "rumus Volume bola adalah V = 3.14 *r *r *r \n";
// echo "Volume bola adalah" .$volume. "\n";

// // Menggunakan fingsi definisi ()
//  // Parameter 1 menyatakan nama konstanta,
//  // Parameter 1 menyatakan nilai konstanta
//  echo "Menghitung Luas Permukaan Bola \n";
//  echo "------------------------------\n";

//  define('phi', 3.14);
//  echo "Masukan Jari-jari bola";
//  $r1 = fgets (STDIN);
//  $luas_permukaan_bola = 4 * PI *$r1 *$r1 ;
//  echo "Rumus Luas Permukaan Bola Adalah LP =4 * PI *r *r \n";
//  echo "Luas Permukaan Bola Adalah".$luas_permukaan_bola."\n";


echo "Menghitung Gaya Gravitasi\n";
echo "----------------------\n";

// Menggunakan const
const Rho = 24;
echo "Masukan Tekanan Zat cair: " ;
$r = fgets (STDIN);
$Tekanan = Rho * $r * $r *$r;
echo "Rumus Tekanan Hidrostatis V = 24 *r *r *r \n";
echo "Tekanannya Adalah" .$Tekanan. "\n";

// Menggunakan fingsi definisi ()
 // Parameter 1 menyatakan nama konstanta,
 // Parameter 1 menyatakan nilai konstanta
 echo "Menghitung Tekanan Hidrotatis \n";
 echo "------------------------------\n";

 define('RHO', 24);
 echo "Masukan Tekanan Zat Cair";
 $r1 = fgets (STDIN);
 $tekanan = 4 * Rho *$r1 *$r1 ;
 echo "Rumus Tekanan Hidrostatis V = 24 *r *r *r \n";
 echo "Tekanannya Adalah" .$tekanan. "\n";






?>