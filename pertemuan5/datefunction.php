<?php
##################
# Pertemuan 5
# Buil-it function

// Function Date
echo date("M");
echo "<br>";
echo date ("l, d-M-Y");
echo "<br>";


// function time
// UNIX TIMESTAMP / EPOCH TIME
echo time();
echo "<br>";
echo date("d M Y",time()+60*60*24*1000);
echo "<br>";
echo date("d M Y",time()-60*60*24*1000);
echo "<br>";


// 60 -> detik
// 60 -> jam
// 24 -> jam dalam sehari
// 2 / 1000 -> hari yang mau ditebak

// mktime -> fungsi untuk membuat detik sendiri yang diinginkan
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal. tahun
echo mktime(0,0,0,11,5,2006);
echo date ("l",mktime(0,0,0,11,5,2006));
echo "<br>";


// strtotime()
// masukan format tanggal
// kebalikan dari mktime inputanya string
echo strtotime("8 Nov 2022");









?>