<!---Example 1--->
<?php
$number = 8;
if ($number %2 == 0){
    echo $number. "Adalah bilangan genap";
} else{
    echo $number ."adalah bilangan ganjil";
}
?>

<!---Example 2--->
<?php
$t = date ("H");

if ($t < "18"){
    echo $t. "Have a good day!";
} else{
    echo $t ."Have a good night!";
}
?>
