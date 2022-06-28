<?php
// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Acessa
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: ' . $email);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "select * from vendedor where email LIKE ?";

    $pdo = Conexao::conectar();
    $query = $pdo->prepare($sql);
    $query->execute(array($email));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    if (empty($dados)) {
        header("location:login.php");
    }

    Conexao::desconectar();

    echo $dados['senha'];
    echo '<br>';
    echo md5($senha);

    if (md5($senha) == $dados['senha']) {
        session_start();
        $_SESSION['email'] = $dados['email'];
        $_SESSION['senha'] = $dados['senha'];
        $_SESSION['id'] = $dados['id'];
        header('Location: index.php');
    } else {
        echo "Senha ou Email Inválidos";
    }

    // print_r($sql);
    // print_r($result);

} else {
    // Não acessa
    header('Location: loginVend.php');
}
