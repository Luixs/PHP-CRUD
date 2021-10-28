<?php
//Sessão
session_start();
//Conexão
include_once "php_action/db_connect.php";
//Header
include_once "includes/header.php";
//Get the parameter that came from the url
if(isset($_GET['id'])){
    $_SESSION['id_troca'] = $_GET['id'];
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql =  "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<div class="row" id="row-title-add">
    <div class="col s12 m6 push-m3">
        <h3 class="light" id="add-title">Editar Cliente</h3>
    </div>
</div>
<form action="">
    <div class="row">
        <div class="col s6 m6 push-m3">
            <div class="input-field col s6 m6 l3">
                <input type="text" name="nome" id="nome" style="color:white" value="<?php echo $dados['nome'] ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6 m6 l3">
                <input type="text" name="sobrenome" id="sobrenome" style="color:white" value="<?php echo $dados['sobrenome'] ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6 m6 push-m3">
            <div class="col s6">
                <input type="email" name="email" id="email" style="color:white" value="<?php echo $dados['email'] ?>">
                <label for="email">Email</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6 m6 push-m3">
            <div class="col s6">
                <input type="text" name="idade" id="idade" style="color:white" value="<?php echo $dados['idade'] ?>">
                <label for="idade">Idade</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 push-m3">
        <button type="submmit" name="btn-atualizar" class="btn">Atualizar</button>
            <a href="index.php" class="btn green">Lista de Clientes</a>
        </div>
    </div>
</form>

<?php
include_once "includes/footer.php";
?>