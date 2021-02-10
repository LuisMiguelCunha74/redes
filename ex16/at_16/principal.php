<?php

$nome1 = $_POST{'txt_nome'};
$idade1 = $_POST{'txt_idade'};

setcookie('nome', $nome1, (time() + (20)));
setcookie('idade', $idade1, (time() + (20)));

echo "nome: ".$nome1."<br>";
echo "idade: ".$idade1."<br>";

echo "<a href='formulario.html'><h5><b>voltar</b></h5></a>";
echo "<a href='visitante1.php'><h5><b>visitante 1</b></h5></a>";
echo "<a href='visitante2.php'><h5><b>visitante 2</b></h5></a>";
?>