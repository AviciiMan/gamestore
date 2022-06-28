<?php
include 'conexao.php';
$pdo = Conexao::conectar();
$sql = "select * from vendedor order by id;";
$lstVendedor = $pdo->query($sql);
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


    <!--Let bvendedorser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ver Vendedor</title>
</head>

<body>
    <div class="card-panel blue-grey lighten-2">
        <tr>
            <a class="btn-floating btn-small waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='index.php'">
                <i class="material-icons">keyboard_backspace</i>
            </a>
        </tr>
        <H1>Lista de Vendedores</H1>
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
            foreach ($lstVendedor as $vendedor) {
            ?>
                <tr>
                    <td><?php echo $vendedor['id'] ?></td>
                    <td><?php echo $vendedor['nome'] ?></td>
                    <td><?php echo $vendedor['idade'] ?></td>
                    <td><?php echo $vendedor['sexo'] ?></td>
                    <td><?php echo $vendedor['email'] ?></td>
                    <td><?php echo $vendedor['telefone'] ?></td>
                    <td><?php echo $vendedor['uf'] ?></td>
                    <td><?php echo $vendedor['cidade'] ?></td>
                    <td><?php echo $vendedor['endereco'] ?></td>
                    <td>
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