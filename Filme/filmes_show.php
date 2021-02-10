<?php
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";    
    }
    if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
        //aqui colocamos o conteudo da pagina
        
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['filme']) || !is_numeric($_GET['filme'])){
                echo '<script>alert("erro ao abrir livro");</script>';
                echo 'aguarde um momento. a reencaminhar pagina';
                header("refresh:5;url=index.php");
                exit();
            }
            $idFilme=$_GET['filme'];
            $con=new mysqli("localhost","root","","filmes");

            if($con->connect_errno!=0){
                echo 'ocorreu um erro no acesso à base de dados'.$con->connect_error;
                exit;
            }
            else{
                $sql = 'select * from filmes where id_filme=?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idFilme);
                    $stm->execute();
                    $res=$stm->get_result();
                    $livro=$res->fetch_assoc();
                    $stm->close();
                }
            else{
                echo'<br>';
                echo ($con->error);
                echo'<br>';
                echo "aguarde um momento. a reencaminhar pagina";
                echo'<br>';
                header("refresh:5;url=index.php");
            }

        }
    }
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>detalhes</title>
</head>
<body>
    <h1>detalhes do filme</h1>
    <?php
    if(isset($livro)){
        echo'<br>';
        echo $livro['titulo'];
        echo'<br>';
        echo $livro['sinopse'];
        echo'<br>';
        echo $livro['idioma'];
        echo'<br>';
        echo $livro['data_lancamento'];
        echo'<br>';
        echo $livro['quantidade'];
        echo'<br>';
    }
    else{
        echo '<h2>parece que o filme selecionado nao existe. <br>confirme a sua seleçao</h2>';
    }
    
    echo $livro['id_filme'];
    
?>
    

        <a class="btn btn-primary" href="filmes_edit.php?filme=<?php echo $livro['id_filme']; ?>">
        Editar</a>


        <a class="btn btn-primary" href="filmes_delete.php?filme=<?php echo $livro['id_filme']; ?>">
        Eliminar</a>

</body>
</html>
<?php
        
        
    }
    else{
        echo'Para entrar nesta pagina necessita de efetuar <a href="login.php>login</a>';
        header('refresh:2; url=login.php');
    }

?>


