<?php
include_once "includes/header.php";
?>

<div class="row" id="row-title-add">
    <div class="col s12 m6 push-m3">
        <h3 class="light" id="add-title">Novo Cliente</h3>
    </div>
</div>
<form action="">
    <div class="row">
        <div class="col s6 m6 push-m3">
            <div class="input-field col s6 m6 l3">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6 m6 l3">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6 m6 push-m3">
            <div class="col s6">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6 m6 push-m3">
            <div class="col s6">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <button type="submmit" name="btn-cadastrar" id="btn-add" class="btn">Cadastrar</button>
            <a href="index.php" class="btn green">Lista de Clientes</a>
        </div>
    </div>
</form>

<?php
include_once "includes/footer.php";
?>