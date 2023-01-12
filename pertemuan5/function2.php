<?php

function hitunganHarga($nama_produk, $harga, $diskon = 0){
    if($diskon == 0){
        return $harga;
    } else {
        return $harga - ($harga * ($diskon/100));
    }
}

// memanggil fungsi hitung harga()
// tanpa diskon
$harga1 = hitunganHarga("kaos",250000); 
// diskon 20%
$harga2 = hitunganHarga("kemeja",500000, 20); 
// diskon 30% 
$harga3 = hitunganHarga("jaket",1000000,30);

// menampilkann hasil perkalian
echo "Harga kaos : " . $harga1 ."<br>";
echo "Harga kemeja : " . $harga2 ."<br>";
echo "Harga jaket : " . $harga3 ."<br>";


?>