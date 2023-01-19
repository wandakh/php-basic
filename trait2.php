<?php
trait clan1{
    public function asaltim1(){
        echo "Asal Tim : s2g";
        echo "<br>";

    }
    public function namapemain1(){
        echo "Nama-nama pemain : ";
        echo "HamsiG ";
        echo "Calse ";
        echo "Sylas ";
        echo "Rayz ";
    }
}
trait clan2{
    public function asaltim2(){
        echo "Asal tim : BTR";
        echo "<br>";

    }
    public function namapemain2(){
        echo "Nama-nama pemain : ";
        echo "Zuxxy ";
        echo "Luxxy ";
        echo "Ryzen ";
        echo "Liquid ";
        echo "Missery ";
        echo "Genfos ";
    }
}
class welcome{
    use clan1;
}
class welcome2{
    use clan2;
}

$obj = new welcome();
$obj->asaltim1();
$obj->namapemain1();
echo "<br>";

$obj2 = new welcome2();
$obj2->asaltim2();
$obj2->namapemain2();

// trait  persegi {
//     public function luaspersegi(){
//         echo "masukan sisi persegi";
//     }
// }
// class hitung{
//     use persegi;
// }
// $obj = new hitung();
// $obj->luaspersegi  (STDIN);


?>