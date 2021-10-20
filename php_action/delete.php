<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-delete'])){
    //Pegando os dados
    $id = mysqli_escape_string($connect, $_POST['id']);    
    //Montando a Query
    $sql = "DELETE FROM clientes WHERE id = '$id';";

    if(mysqli_query($connect, $sql)){
        $_SESSION['msg'] = "Deletado com sucesso!";
        header('Location: ../index.php?sucesso');
    }else{
        $_SESSION['msg'] = "Erro ao detelar!";
        header('Location: ../index.php?erro');
    }
}