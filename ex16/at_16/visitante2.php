<?php
echo "<span style='color:red;'><h3><b>************************************pagina visitante 2*****************************</b></h3></span><br>";

$nome2 = $_COOKIE['nome'];
$idade2 = $_COOKIE['idade'];

echo "nome: ".$_COOKIE['nome']."<br>";
echo "idade: ".$_COOKIE['idade'];

echo "<br>";
echo "nome: ".$nome2."<br>";
echo "idade: ".$idade2;

echo "<a href='formulario.html'><h5><b>voltar</b></h5></a>";
echo "<a href='principal.php'><h5><b>principal</b></h5></a>";
echo "<a href='visitante1.php'><h5><b>visitante 1</b></h5></a>";
?>