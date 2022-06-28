<?php

if (!isset($_SESSION)) session_start();

$id = $_SESSION['id'];

include 'conexao.php';
$pdo = Conexao::conectar();
$sql = "select * from cliente where id=?;";
$query = $pdo->prepare($sql);
$query->execute(array($id));
$lstCliente = $query->fetch(PDO::FETCH_ASSOC);

Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Editar Perfil</title>
</head>

<body>
    <div class="form_cd">
        <h2>Editar Perfil</h2>

        <div class="row">
            <form class="col s12" method="POST" action="edtCliente.php">
                <div>
                    <h1 class="black-text bold"><b>ID: <?php echo $id; ?> </b> </h1>
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nome" name="nome" type="text" class="validate" value="<?= $lstCliente['nome']; ?>">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="idade" type="text" name="idade" class="validate" value="<?= $lstCliente['idade']; ?>">
                        <label for="idade">Idade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="telefone" type="text" name="telefone" class="validate" value="<?= $lstCliente['telefone']; ?>">
                        <label for="telefone">Telefone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="uf" type="text" name="uf" class="validate" value="<?= $lstCliente['uf']; ?>">
                        <label for="uf">UF</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cidade" type="text" name="cidade" class="validate" value="<?= $lstCliente['cidade']; ?>">
                        <label for="cidade">Cidade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="endereco" type="text" name="endereco" class="validate" value="<?= $lstCliente['endereco']; ?>">
                        <label for="endereco">Endereco</label>
                    </div>
                </div>
                <div><a href="index2.php"><button>Voltar</button></a>
                    <input type="submit" name="action" value="Editar">
                    <input type="hidden" name="form" value="f_form">
                </div>
            </form>
        </div>
</body>

</html>