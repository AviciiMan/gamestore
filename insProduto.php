<?php
include 'conexao.php';
//programa php para inserir dados de produto
$nome = trim($_POST['txtNome']);
$estoque = trim($_POST['txtEstoque']);
$descricao = trim($_POST['txtDescricao']);
$preco = trim($_POST['txtPreco']);

$preco = str_replace(",", ".", $preco);

if (!empty($nome) && !empty($estoque) && !empty($descricao) && !empty($preco)) {
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO produto(nome, estoque, descricao, preco) VALUES (?,?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $estoque, $descricao, $preco));
    Conexao::desconectar();
}

header("location:lstProduto.php");
