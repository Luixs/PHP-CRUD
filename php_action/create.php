<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])){

    //Pegando os dados
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    
    //Montando a Query
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome','$sobrenome','$email','$idade');";

    if(mysqli_query($connect, $sql)){
        $_SESSION['msg'] = "Cadastrado com sucesso!";
        header('Location: ../index.php?sucesso');
    }else{
        $_SESSION['msg'] = "Erro ao cadastrar!";
        header('Location: ../index.php?erro');
    }
}