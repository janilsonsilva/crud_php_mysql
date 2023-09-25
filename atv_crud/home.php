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
            $rs = mysqli_query($con, $sql);
            $reg = mysqli_fetch_assoc($rs);

            $nome = $reg['nome'];
            $idade = $reg['idade'];
            $matricula = $reg['matricula'];
            $email = $reg['email'];            
            $senha = $reg['senha'];

            $opcaoForm = "Editar";
            $local = "atualizar.php?id={$id}";
        }else{
            $opcaoForm = "Cadastrar";
            $local = "salvar.php";
        } 
    ?>

    <form action='<?=$local?>' method='POST'>
        <label> Nome       <br> <input name="nome" required value = "<?=isset($nome)?$nome:'';?>"> </label><br>
        <label> Idade      <br> <input name="idade" type="number" required value="<?=isset($idade)?$idade:'';?>"> </label><br>
        <label> Matricula  <br> <input name="matricula" required value = "<?=isset($matricula)?$matricula:'';?>"> </label><br>
        <label> E-mail     <br> <input name="email" type="email" required value = "<?=isset($email)?$email:'';?>"> </label><br>
        <label> Senha      <br> <input name="senha" type="password" required value  ="<?=isset($senha)?$senha:'';?>"> </label><br>
        <input type="submit" value="<?=$opcaoForm?>">
    </form>

    <?php include 'listar.php';?>

</body>
</html>