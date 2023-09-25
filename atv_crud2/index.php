<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <?php
        if(isset($_REQUEST['id'])){
            require_once 'conexao.php';

            $id = $_REQUEST['id'];
            $sql = "select * from usuarios where id='$id'";
            $rc = mysqli_query($con, $sql);
            $reg = mysqli_fetch_assoc($rc);

            $nome = $reg['nome'];
            $idade = $reg['idade'];
            $matricula = $reg['matricula'];
            $email = $reg['email'];
            $senha = $reg['senha'];

            $local = "atualizar.php?id={$id}";
            $opcaoForm = "Editar";
        }else{
            $local = "salvar.php";
            $opcaoForm = "Cadastrar";
        }
    ?>

    <form action="<?=$local?>" method="post">
        <label>Nome:<br>            <input name="nome" value="<?=isset($nome)?$nome:''?>" required></label><br>
        <label>Idade:<br>           <input name="idade" value="<?=isset($idade)?$idade:''?>" type="number" required></label><br>
        <label>matricula:<br>       <input name="matricula" value="<?=isset($matricula)?$matricula:''?>" required></label><br>
        <label>E-mail:<br>          <input name="email" type="email" value="<?=isset($email)?$email:''?>" required></label><br>
        <label>Senha:<br>           <input name="senha" type="password" value="<?=isset($senha)?$senha:''?>" required></label><br>
        <input type="submit" value="<?=$opcaoForm?>">
    </form>

    <?php include 'listar.php' ?>
    
</body>
</html>