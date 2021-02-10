<?php
$vetor = array();
$soma = 0;
$produto = 1;
for ($i=0;$i<20;$i++){
    $vetor[$i] = rand(1,10000);
}
$max = $vetor[0];
$min = $vetor[0];
for ($i=0;$i<20;$i++){    
    if($vetor[$i] >= $max){
       $max = $vetor[$i]; 
    }
    if($vetor[$i] <= $min){
       $min = $vetor[$i];
    }
}
for ($i=0;$i<20;$i++){
echo $i. ' é: ' .$vetor[$i] .'<br>';
$soma = $soma + $vetor[$i];
$produto = $produto * $vetor[$i]; 
}
$media = $soma / 20;
echo ' a media é: ' .$media .'<br>';
echo ' o produto é: '.$produto.'<br>';
echo ' o maior é: '.$max .'<br>';
echo ' o menor é: '.$min ;
?>