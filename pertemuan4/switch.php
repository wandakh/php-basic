
<!-- example 1--->
<?php
$favcolor = "";

switch ($favcolor){
    case "red":
        echo "Your favorite color is red!";
        break;

    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
    echo "Your favorite color is neither red, blue or green!";

   
}
?>

<?php
$month = 0;

switch ($month){
    case 1;
    case 2;
    case 3;
    case 4;
    case 5;
    case 6;
    echo "Bulan" .$month . "Termasuk Semester 1";
    break;
    case 7;
    case 8;
    case 9;
    case 10;
    case 11;
    case 12;
    echo "Bulan" .$month . "Termasuk Semester 1";
    break;
    default:
    echo "Tidak ada bulan" .$month. "Termasuk semester 2";



}
?>

