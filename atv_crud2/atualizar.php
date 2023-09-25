<?php
    require_once 'conexao.php';

    $id = $_REQUEST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "update usuarios set nome='$nome', idade='$idade', matricula='$matricula', email='$email', senha='$senha' where id='$id'";
    
    if(!$con->query($sql)){
        echo mysqli_error($con);
    }else{
        header('Location:index.php');
    }
?>