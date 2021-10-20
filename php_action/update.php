<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-atualizar'])){
    //Pegando os dados
    $id = mysqli_escape_string($connect,$_SESSION['id_troca']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    
    //Montando a Query
    $sql = "UPDATE clientes SET nome='$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id';";

    if(mysqli_query($connect, $sql)){
        $_SESSION['msg'] = "Atualizado com sucesso!";
        header('Location: ../index.php?sucesso');
    }else{
        $_SESSION['msg'] = "Erro ao atualizar!";
        header('Location: ../index.php?erro');
    }
}