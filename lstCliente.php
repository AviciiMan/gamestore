<?php
include 'conexao.php';
$pdo = Conexao::conectar();
$sql = "select * from cliente order by id;";
$lstCliente = $pdo->query($sql);
Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <!--Let bclienteser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ver cliente</title>
</head>

<body>
    <div class="card-panel blue-grey lighten-2">
        <H1>Lista de Clientes</H1>
    </div>

    <div class="col s10">
        <table class="striped blue-grey lighten-5">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>UF</th>
                <th>Cidade</th>
                <th>Endereço</th>
            </tr>

            <?php
            foreach ($lstCliente as $cliente) {
            ?>
                <tr>
                    <td><?php echo $cliente['id'] ?></td>
                    <td><?php echo $cliente['nome'] ?></td>
                    <td><?php echo $cliente['idade'] ?></td>
                    <td><?php echo $cliente['sexo'] ?></td>
                    <td><?php echo $cliente['email'] ?></td>
                    <td><?php echo $cliente['telefone'] ?></td>
                    <td><?php echo $cliente['uf'] ?></td>
                    <td><?php echo $cliente['cidade'] ?></td>
                    <td><?php echo $cliente['endereco'] ?></td>
                    <td class="center">
                        <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $cliente['id']; ?>)">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                    <td></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </br>
    </br>
    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Cliente ' + id + '?')) {
            location.href = 'remProduto.php?id=' + id;
        }
    }
</script>