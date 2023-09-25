<?php
    require_once 'conexao.php';

    $sql = "select * from usuarios";
    $rs = mysqli_query($con, $sql);

    while($reg = mysqli_fetch_assoc($rs)){
        echo "<hr><ul> ID: {$reg['id']} | <a href='index.php?id={$reg['id']}'>Editar</a> | <a href='deletar.php?id={$reg['id']}'>Deletar</a>   
            <li>Nome: {$reg['nome']}</li>
            <li>Idade: {$reg['idade']}</li>
            <li>Matricula: {$reg['matricula']}</li>
            <li>E-mail: {$reg['email']}</li>
            <li>Senha: {$reg['senha']}</li>
        </ul>";
    }  
?> 