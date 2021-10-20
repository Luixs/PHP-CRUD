<?php
//Conexão com o db
$servername = "localhost";
$username = "root";
$passoword = "";
$db_name = "crud";

$connect = mysqli_connect($servername,$username,$passoword,$db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Erro ->".mysqli_connect_error();
}