<?php
    // Inicia a sessão
    session_start();

    // Remove as variáveis 'usuario' e 'senha' da sessão
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

    // Redireciona para a página de login (login.php)
    header("Location: login.php");
?>