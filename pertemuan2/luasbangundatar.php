<?php

echo "--------- Menghitung Luas Lingkaran ---------";


$jari = 6;
$luas = 3.14 * $jari * $jari ;

echo "Luas lingkarang adalah : " .$luas ."\n\n";


echo "--------- Menghitung Luas Segitiga ---------";


$alas = 10;
$tinggi = 30  ;
$luas = $alas * $tinggi  /2;

echo "Luas Segitiga adalah : " .$luas."\n\n";



echo "--------- Menghitung Luas Persegi ---------";

$sisi = 3000;
$luas = $sisi *$sisi;

echo "Luas Persegi adalah : " .$luas;

echo "Masukan jari-jari :" ;
$jari = fgets (STDIN);
$luas = 3.14 * $jari * $jari;

echo "Luas Lingkaran adalah :" .$luas;






?>