<?php
//abre a sessão
session_start();

//destrói as variáveis de sessão
unset($_SESSION['login']);
unset($_SESSION['pwd']);

Header("location: login.php");
