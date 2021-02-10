<?php
    $valor = $_POST["chb_valor"];
    if($valor == 1){
        echo"aluno pessimo com nota de valor 1 ";
    }
    else if($valor == 2){
        echo "Aluno mediocre com nota de valor 2";
    }
    else if($valor == 3){
        echo "aluno bem mediano com nota de valor 3";
    }
    else if($valor == 4){
        echo "aluno bom com nota de valor 4";
    }
    else if($valor == 5){
        echo"aluno muitissomo bom com nota de valor 5";
    }
?>