<?php
####################################
# Pertemuan : 3
# Name File : opretaor_decremnetphp.php
####################################

echo "Masukan Nilai a:";
$a = fgets(STDIN);

echo "Pre-Increment \n";
echo "Nilai".$a."Sebelum dikurang :" .$a. "\n";
echo "Nilai --$a".--$a. "\n";
echo "Nilai Setelah Dikurang:".$a."\n";

echo"\n";
# Mengembalikan nilai $a ke nilai 5;
// $a1 =5;
echo "Post-Increment \n";
echo "Nilai".$a."Sebelum dikurang :" .$a. "\n";
echo "Nilai $a--".$a--. "\n";
echo "Nilai Setelah Dikurang:".$a++."\n";

?>