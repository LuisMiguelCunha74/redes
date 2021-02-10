<?php

$nome= $_POST{'txt_nome'};
$idade= $_POST{'txt_idade'};

session_name('variaveosnomeidade');
session_start();

$_SESSION['NomeAluno'] = $nome;
$_SESSION['IdadeAluno'] = $idade;

echo "nome: ".$nomw."<br>";
echo "idade: ".$idade."<br>";

echo "<a href='formulario.html'><h5><b>voltar</b></h5></a>";
echo "<a href='visitante1.php'><h5><b>visitante 1</b></h5></a>";
echo "<a href='visitante2.php'><h5><b>visitante 2</b></h5></a>";
?>