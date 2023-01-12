<?php

// Pertemuan 2 - Latihan PHP
// Opertor


// Operator arimatika
// +, -, *, /, %

$a = 10;
$b = 20;

$c = $a *$b;
echo "$c";

// Operator Relation

// $d = $a >$b;
// echo "$a > $b : $d";

// // <
// $e = $a < $b;
// echo "$a < $b : $e <br>";

// // ==
// $f = $a == $b;
// echo "$a == $b : $f<br>";

// // !=
// $g = $a != $b;
// echo "$a != $b : $g<br>";

// //>= 
// $h = $a >= $b;
// echo "$a >= $b : $h <br>";

// // <= 
// $i = $a <= $b;
// echo "$a <= $b : $i<br>";

// Operator Logika
// &&, ||, ! (kebalikan)

$x = 10;
var_dump($x < 20 && $x %2 == 0);

$x = 10;
var_dump($x > 20 && $x %2 != 0);

$x = 10;
var_dump($x < 20 || $x %2 != 0);

var_dump($x >! 20);

?>