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

    <title>Inserir Dados do Produto</title>
</head>

<body>
    <div class="container blue-grey lighten-2 s12">

        <div class="col s12">
            <h1>Cadastro de Produto</h1>

            <div class="row">
                <form action="insProduto.php" method="post" id="frmInsProduto" class="col s12">
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblNome" class="black-text">Informe a Nome: </label>
                            <input placeholder="" id="txt_Nome" name="txtNome" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblEstoque" class="black-text">Informe o Estoque: </label>
                            <input placeholder="" id="txt_Estoque" name="txtEstoque" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblDescricao" class="black-text">Informe a Descricao: </label>
                            <input placeholder="" id="txt_Descricao" name="txtDescricao" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblPreco" class="black-text">Informe a Preco: </label>
                            <input placeholder="" id="txt_Preco" name="txtPreco" type="text">
                        </div>
                        <div class="input-field col s8">
                            <br>
                            <button class="btn waves-effect waves-light green" type="submit">Salvar
                                <i class="material-icons right">save</i>
                            </button>
                            <button class="btn waves-effect waves-light red" type="reset">Limpar
                                <i class="material-icons right">brush</i>
                            </button>

                            <button class="btn waves-effect waves-light  indigo darken-4" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstProduto.php'">
                                Voltar <i class="material-icons right">arrow_back</i>
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
</body>

</html>