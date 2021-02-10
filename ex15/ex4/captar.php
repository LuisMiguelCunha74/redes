<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $soma = $num1 + $num2 + $num3 + $num4;
    $media=$num1+$num2+$num3+$num4/10;
    echo "soma é " .$soma. "<br>";    
    echo "media é " .$media. "<br>";
?>