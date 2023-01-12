<?php

$nilai  =  80;

if ($nilai == 90  ) {
    echo " anda mendapatkan  nilai A+";

} elseif ($nilai >= 80 ) {
    echo "anda medapatkan nilai A";
} elseif ($nilai >=70 ) {
    echo "anda mndapatkan nilai B+";
} elseif ($nilai >= 60){
    echo "anda mendapatkan nilai B";
} elseif ($nilai >=50){
    echo "anda mendapatkan nilai C+";
} elseif ($nilai >= 40){
    echo "anda mendapatkan nilai C";
} elseif ($nilai >= 30){
    echo "anda mendapatkan nilai D";
} elseif ($nilai >= 20){
    echo "anda mendapatkan nilai E";
} else {
    echo "anda tidak mendapatkan nilai";
}


?>