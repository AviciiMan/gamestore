<?php
include 'menu.php';

$id = $_GET['id'];

include 'conexao.php';
$sql = "select * from produto where id=?;";
$pdo = Conexao::conectar();
$query = $pdo->prepare($sql);
$query->execute(array($id));
$produtos = $query->fetch(PDO::FETCH_ASSOC);

Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Detalhes do Produto</title>
</head>

<body>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Detalhes do Produto</h1>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblID" class="white-text">
                            <h5><b>ID: </b><?php echo $produtos['id']; ?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblnome" class="white-text">
                            <h5><b>Nome: </b><?php echo $produtos['nome']; ?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblestoque" class="white-text">
                            <h5><b>Estoque: </b><?php echo $produtos['estoque']; ?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lbldescricao" class="white-text">
                            <h5><b>Descrição: </b><?php echo $produtos['descricao']; ?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblpreco" class="white-text">
                            <h5><b>Preço: </b><?php echo $produtos['preco']; ?></h5>
                        </label>
                    </div>
                </div>
                <br />
                <br />
                <div class="grey darken-2 col s12 center">
                    <div class="input-field">
                        <a class="waves-effect waves-light btn green" onclick="JavaScript:location.href='frmInsProduto.php'">
                            <i class="material-icons right">add</i>Novo</a>

                        <a class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='frmEdtProduto.php?id=' + 
                           <?php echo $produtos['id']; ?>">
                            <i class="material-icons right">edit</i>Editar</a>

                        <a class="waves-effect waves-light btn red" onclick="JavaScript:remover(<?php echo $produtos['id'] ?>)">
                            <i class="material-icons right">delete</i>Remover</a>

                        <a class="waves-effect waves-light btn blue" onclick="JavaScript:location.href='lstProduto.php'">
                            <i class="material-icons right">list</i>Listar</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <br>
    <br>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o imóvel ' + id + '?')) {
            location.href = 'remproduto.php?id=' + id;
        }
    }
</script>