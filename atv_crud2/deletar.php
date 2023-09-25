<?php
    require_once 'conexao.php';

    $id = $_REQUEST['id'];
    $sql = "delete from usuarios where id='$id'";

    if(!mysqli_query($con, $sql)){
        echo mysqli_error($con);
    }else{
        header("Location:index.php");
    }
?>
