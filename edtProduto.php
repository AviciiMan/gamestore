<?php
include 'conexao.php';
//programa php para editar dados de produto
$nome = trim($_POST['txtNome']);
$estoque = trim($_POST['txtEstoque']);
$descricao = trim($_POST['txtDescricao']);
$preco = trim($_POST['txtPreco']);
$id = trim($_POST['id']);

if (!empty($nome) && !empty($estoque) && !empty($descricao) && !empty($preco) && !empty($id)) {

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE produto SET nome=?,estoque=?,descricao=?,preco=? WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $estoque, $descricao, $preco, $id));
    Conexao::desconectar();
}

header("location:lstProduto.php");
