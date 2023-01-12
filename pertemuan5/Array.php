<?php
#################333
# pertemuan 5
# nama file : Array

// Make Array (CREATE)
$day = ["Monday","Tuesday","Wednesday", "Thursday","Friday"];

// Show Array (READ)
// var_dump, print r
// debungging - untuk developer 
var_dump($day);
echo"<br>";
print_r($day);
echo "<br>";

// show 1 element in array
echo $day[2];

// add element in Array (UPDATE)
echo "Sebelum ditambah <br>";
var_dump ($day);
echo "<br>";
echo "Setelah ditambar <br>";
$day[] ="Saturday";
print_r($day);
// $day[] = "Sunday";
var_dump($day);

echo "<br>";
// HAPUS ELEMEN
unset($day[0]);
var_dump($day);

?>