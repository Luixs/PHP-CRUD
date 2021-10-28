<?php
//Conexão
include_once "php_action/db_connect.php";
//Header
include_once "includes/header.php";
//Message
include_once "includes/message.php";
?>

<body>
    <section>
    
    <h1 style="color:white">Clientes</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0">
            <tbody>
                <?php
                    $sql =  "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    if(mysqli_num_rows($resultado)>0){
                    while($dados = mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="edit.php?id=<?php echo $dados['id']; ?>" class="btn-floating black"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    <div id="modal<?php echo $dados['id']; ?>" class="modal black" style="max-height:50%;">
                        <div class="modal-content black">
                        <h4 style="color:white">Opa!</h4>
                        <p style="color:whitesmoke">Tem certeza que deseja excluir esse cliente?<p>
                        </div>
                        <div class="modal-footer black">
                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-delete" class="btn red">Sim, quero deletar</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat" id="modal-bnt">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php 
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <a href="add.php" class="btn" id="btn1">Adicionar cliente</a>
    </section>


    <!-- follow me template -->
    <div class="img-icon-git">
        <img src="assents/git.png" alt="git_img" class="icon-git">
    </div>
    
    <div class="made-with-love">
    <a target="_blank" href="https://github.com/luixs">LUIS STARLINO </a>
    </div>
</body>

<?php
include_once "includes/footer.php";
?>