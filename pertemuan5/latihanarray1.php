<?php

$student = ["wanda khoirunnisa", "051123", "Student","wandakh16@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Daftar student</title>
</head>
<body>
    <?php foreach($student as $value)
    {
        echo "$value <br>";
    }
    ?>
    
</body>
</html>
