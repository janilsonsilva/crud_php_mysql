<?php
    $hostname = "localhost";        //nome do servidor
    $username = "root";             //nome de usuario
    $password = "";                 //senha
    $database = "cadastro_aluno";   //nome do banco de dados
    
    $con = new mysqli($hostname, $username, $password, $database);

    $sql = "CREATE TABLE usuarios(
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(255) NOT NULL,
                idade INT(10) NOT NULL,
                matricula VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                senha VARCHAR(255) NOT NULL
            )";
    
    if($con->query($sql)){
        echo "<p>Tabela criada com sucesso</p>";
    }else{
        //echo mysqli_error($con);

        /*

        -> Aqui ficaria retornando a mensagem de que a tabela já existe depois que for criada pela primeira vez.
        -> Isso acontece porque a tabela está sendo criada através da instrução sql na variável $sql que é acionada toda 
           vez que o arquivo conexão é requerido.
        -> Depois de criada pela primeira vez, não vai ser criada outra novamente.

        */
    }
    //OBS: Só vai ser preciso criar o banco de dados "cadastro_aluno". A tabela usuarios é criada pela instrução acima.
?>

