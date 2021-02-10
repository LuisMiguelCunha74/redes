<?php
$login="aluno";
$password="123";
if($login=="aluno"&&$password=="123")
{
    header("location: main.php");
}
else
{
    header("location: erro.php");
}
?>