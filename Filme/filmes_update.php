<?php
$idFilme=$_GET['filme'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $titulo = "";
    $sinopse = "";
    $quantidade = 0;
    $data_lancamento = "";
    $idioma = "";
    
    if (isset($_POST['titulo'])) {
        $titulo = $_POST['titulo'];
    }
    else {
        echo '<script>alert("e obrigatorio o preenchimento do titulo.");</script>';
    }
    if(isset($_POST['sinopse'])){
        $sinopse = $_POST['sinopse'];
    }
        if(isset($_POST['quantidade'])&& is_numeric($_POST['quantidade'])){
        $quantidade = $_POST['quantidade'];
    }
        if(isset($_POST['idioma'])){
        $idioma = $_POST['idioma'];
    }
        if(isset($_POST['data_lancamento'])){
        $data_lancamento = $_POST['data_lancamento'];
    }
    
    $con = new mysqli("localhost", "root", "", "filmes");
    
    if($con->connect_errno!=0){
        echo "ocorreu um erro no acesso a base de dados. <br>".$con->connect_error;
        exit;
    }
    else{
        $sql='update filmes SET titulo=? ,sinopse=? ,idioma=? ,quantidade=? ,data_lancamento=? WHERE id_filme=?';
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param('sssisi',$titulo,$sinopse,$idioma,$quantidade,$data_lancamento,$idFilme);
            $stm->execute();
            $stm->close();
            echo '<script>alert("Filme alterado com sucesso!!");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
        else{
            echo "<h1> houve um erro ao processar o seu pedido!<br>ira ser reencaminhado!</h1>";
            header("refresh:5; url=index.php");
        }
    }
}