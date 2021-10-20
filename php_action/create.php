<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

function clear($input){
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])){

    //Pegando os dados
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    
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