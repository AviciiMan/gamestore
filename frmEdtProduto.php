<?php

$id = $_GET['id'];

include 'conexao.php';
$pdo = Conexao::conectar();
$sql = "select * from produto where id=?;";
$query = $pdo->prepare($sql);
$query->execute(array($id));
$produto = $query->fetch(PDO::FETCH_ASSOC);

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

    <title>Editar Dados do Produto</title>
</head>

<body>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Editar Produto</h1>
        </div>
        <div class="row">
            <form action="edtProduto.php" method="POST" id="frmEdtProduto" class="col s12">
                <div class="input-field col s8">
                    <h3><label for="lblID" class="black-text bold"><b>ID: <?php echo $id; ?> </b></label> </h3>
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                </div>
                <div class="input-field col s8">
                    <label for="lblnome" class="black-text bold">Informe o Nome:</label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php echo $produto['nome']; ?>">
                </div>
                <div class="input-field col s8">
                    <label for="lblestoque" class="black-text bold">Informe o Estoque:</label>
                    <input id="txtEstoque" name="txtEstoque" value="<?php echo $produto['estoque']; ?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lbldescricao" class="black-text bold">Informe a Descrição:</label>
                    <input id="txtDescricao" name="txtDescricao" value="<?php echo $produto['descricao']; ?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblpreco" class="black-text bold">Informe o Preço</label>
                    <input id="txtPreco" name="txtPreco" value="<?php echo $produto['preco']; ?>" type="text">
                </div>
                <div class="grey darken-2 center col s12">
                    <br />
                    <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light blue" type="button" name="btnVoltar" onclick="JavaScript:location.href='lstProduto.php'">Voltar
                        <i class="material-icons right">arrow_back</i>
                    </button>
                    <br />
                    <br />
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
</body>

</html>