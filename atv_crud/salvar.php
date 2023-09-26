<?php
    require_once "conexao.php";

    $nome = ucwords($_POST['nome']);
    $idade = $_POST['idade'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = hash("sha256", $_POST['senha']);
    

    $sql  = "insert into usuarios(nome, idade, matricula, email, senha) values('$nome', '$idade', '$matricula', '$email', '$senha')";

    if(!mysqli_query($con, $sql)){
        echo mysqli_error($con);
    }else{
        header("Location:home.php");
    }
?>