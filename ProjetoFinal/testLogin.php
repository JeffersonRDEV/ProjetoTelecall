<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!-- Importe a biblioteca jQuery -->
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery.min.js"></script>

    <!--titulo do navegador-->
    <title>Login</title>

    <!--estilos do formulario-->
    <link href="./css/formulario.css" rel="stylesheet">
    <link href="./css/navbar.css" rel="stylesheet">
    

    <!--Favicon-->
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./jquery.mask.js"></script>
</head>


<?php
    // Inicia a sessão
    session_start();
    // Verifica se o formulário foi submetido e se os campos de usuário e senha não estão vazios
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        // Inclui o arquivo de configuração do banco de dados
        include "./Conexao/config.php";
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
      
        // Cria uma consulta SQL para verificar as credenciais no banco de dados
        $sql = "SELECT * FROM pessoas WHERE usuario = '$usuario' and senha = '$senha'";
       

        // Executa a consulta no banco de dados
        $result = $conexao->query($sql);

       // Verifica se há pelo menos uma linha correspondente no resultado da consulta
        if(mysqli_num_rows($result) < 1)
        {
            // Se não houver correspondência, limpa as variáveis de sessão e redireciona para a página de login
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']); 
            echo "<H1>Login inexistente! Tente novamente.</H!><hr>
            <a href='login.php' class='btn btn-info'>Voltar para validação</a>";
            
            
            
        }
        else
        {
             // Se houver correspondência, define as variáveis de sessão e redireciona para a página do sistema
             $_SESSION['usuario'] = $usuario;
             $_SESSION['senha'] = $senha;
             $user_data = mysqli_fetch_assoc($result);
             if ($user_data['tipo']== 2) {

                header('Location: sistema.php');
             }
else {
    header('Location: home.php');
}
        }
    }
    else
    {
         // Se o formulário não foi submetido corretamente, redireciona para a página de login
        header('Location: verificacao.php');
    }
?>