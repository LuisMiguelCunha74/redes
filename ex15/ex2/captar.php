<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $soma = $num1 + $num2 + $num3 + $num4;
    $subtracao = $num1 - $num2 - $num3 - $num4;
    $multipicacao = $num1 * $num2 * $num3 * $num4;
    $divisao = $num1 / $num2 / $num3 / $num4;
    echo "soma é " .$soma. "<br>";
    echo "a subtracao é " . $subtracao. "<br>";
    echo "a multipicacao é " . $multipicacao. "<br>";
    echo "a divisao é " . $divisao. "<br>";
?>