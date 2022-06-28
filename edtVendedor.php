<?php
include 'conexao.php';

$nome = trim($_POST['txtNome']);
$estoque = trim($_POST['txtEmail']);
$descricao = trim($_POST['txtTelefone']);
$preco = trim($_POST['txtSexo']);
$preco = trim($_POST['txtIdade']);
$preco = trim($_POST['txtCidade']);
$preco = trim($_POST['txtUf']);
$preco = trim($_POST['txtEndereco']);
$id = trim($_POST['id']);

if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($sexo) && !empty($idade) && !empty($cidade) && !empty($uf) && !empty($endereco) && !empty($id)) {

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE produto SET nome=?,email=?,telefone=?,sexo=?,idade=?,cidade=?,uf=?,endereco=? WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $email, $telefone, $sexo, $idade, $cidade, $uf, $endereco, $id));
    Conexao::desconectar();
}

header("location:index.php");
