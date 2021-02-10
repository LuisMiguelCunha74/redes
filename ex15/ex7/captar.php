<?php
    $idade = $_POST["idade"];
    if($idade <18){
        echo"voce tem ".$idade. " anos - é menor de idade";
    }
    else if($idade >=18 && $idade <=100){
        echo "voce tem " .$idade. " anos - é maior de idade";
    }
    else if($idade>100){
        echo "voce é um ET";
    }
    else{
        echo"caso impossivel";
    }
?>