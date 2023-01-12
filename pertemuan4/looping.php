<?php
###################
# Pertemuan 5
# pengulangan
##########3

//for 
// for ($i=0; $i<5; $i++){
//     echo "Baris ke-$1<br>";
// }

// $x = 0;

// while($x <= 100){
//     echo "The number is: $x <br>";
//     $x+=10;
// }

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x<= 5);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value){
    echo "$value <br>";
}

$age = array(
    "peter"=>"35",
    "Ben"=>"37",
    "Joe"=> "43");

    foreach ($age  as $x => $val){
        echo "$x = $val<br>"; 
    }

?>