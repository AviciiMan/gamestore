<?php
//abre a sessão
session_start();

//destrói as variáveis de sessão
unset($_SESSION['login']);
unset($_SESSION['pwd']);
unset($_SESSION['id']);

Header("location: home.php");
