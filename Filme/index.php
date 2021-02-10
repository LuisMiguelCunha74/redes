<?php
$con=new mysqli("localhost","root","","filmes");
if($con->connect_errno!=0){
    echo "Ocorreu um erro no acesso à base de dados ". $con->connect_error; 
    exit;
}
else{
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="iso-8859-1">
    <title>filmes</title>
</head>
<body>
<h1>Lista de filmes</h1>
    <?php
        $stm = $con->prepare('select * from filmes');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
            echo $resultado['titulo'];
            echo '</a>';
            echo '<br>';
        }
    $stm->close();
    ?>
    <br>
    <button>
    <a class="btn btn-primary" href="filmes_create.php">
        Criar</a>
    </button>
    <button>
        <a class="btn btn-primary" href="login.php">
            Login</a><br></button>
    <button><a class="btn btn-primary" href="register.php">
        Register</a><br></button>
</body>
</html>
<?php
}//end if - if($con->connect_errno!=0)
?>