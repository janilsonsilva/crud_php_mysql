<?php
    require_once 'conexao.php';

    $id = $_REQUEST['id'];
    $nome = ucwords($_POST['nome']);
    $idade = $_POST['idade'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = hash("sha256", $_POST['senha']);

    $sql = "update usuarios set nome='$nome', idade='$idade', matricula='$matricula', email='$email', senha='$senha' where id='$id'";

    if(!mysqli_query($con, $sql)){
        echo mysqli_error($con);
    }else{
       header("Location:home.php");
    }
?> 