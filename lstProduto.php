<?php
include 'conexao.php';
$pdo = Conexao::conectar();
$sql = "select * from produto order by id;";
$lstProduto = $pdo->query($sql);
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

    <title>Listar Produto</title>
</head>

<body>
    <div class="container blue-grey lighten-2">
        <div class="card-panel blue-grey lighten-2">
            <H1>Listar Produto</H1>
        </div>

        <div class="col s10">
            <table class="striped blue-grey lighten-5">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th class="center">Funções</th>
                    <th>
                        <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='frmInsproduto.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
                </tr>
                <?php
                foreach ($lstProduto as $produto) {
                ?>
                    <tr>
                        <td><?php echo $produto['id'] ?> </td>
                        <td><?php echo $produto['nome'] ?> </td>
                        <td><?php echo $produto['estoque'] ?> </td>
                        <td><?php echo $produto['descricao'] ?> </td>
                        <td><?php echo $produto['preco'] ?> </td>
                        <td class="center">
                            <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmEdtproduto.php?id=' + 
                           <?php echo $produto['id']; ?>">
                                <i class="material-icons">edit</i>
                            </a>
                            <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $produto['id']; ?>)">
                                <i class="material-icons">delete</i>
                            </a>
                            <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='frmDetProduto.php?id=' + 
                           <?php echo $produto['id']; ?>">
                                <i class="material-icons">info</i>
                            </a>
                        </td>
                        <td></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <br>
        <br>
    </div>

</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Produto ' + id + '?')) {
            location.href = 'remproduto.php?id=' + id;
        }
    }
</script>