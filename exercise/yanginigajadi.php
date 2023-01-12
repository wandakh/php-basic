<?php

// nilai sesuai inputan 
function nilai($nama_siswa, $nilai){

    if ($nilai == 90  ) {
        return "anda mendapatkan  nilai A+" ;
    } elseif ($nilai >= 80 ) {
        return "anda medapatkan nilai A";
    } elseif ($nilai >=70 ) {
        return "anda mndapatkan nilai B+";
    } elseif ($nilai >= 60){
        return "anda mendapatkan nilai B";
    } elseif ($nilai >=50){
        return "anda mendapatkan nilai C+";
    } elseif ($nilai >= 40){
        return "anda mendapatkan nilai C";
    } elseif ($nilai >= 30){
        return "anda mendapatkan nilai D";
    } elseif ($nilai >= 20){
        return "anda mendapatkan nilai E";
    } else {
        return "anda tidak mendapatkan nilai";
    }
    
}
$nilai1 = nilai("wanda",89 );
$nilai2 = nilai("kh",98 );
$nilai3 = nilai("hehe",40 );

echo "siswa dengan nama ".$nilai1;
echo $nilai2;
echo $nilai3;







?>