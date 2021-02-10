<?php
$vetor = array();
for ($i=1;$i<=15;$i++){
    $num = rand(1,1000);
    $vetor[$i]=$num;
}
for ($i=1;$i<=15;$i++){

if($vetor[$i] % 2 == 0){
    echo 'par';
}
else{
    echo 'impar';
}
echo ' é a posição do vetor: ' .$vetor[$i] .'<br>';

}

?>