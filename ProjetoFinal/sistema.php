<?php
// Inicia a sessão
session_start();

// Inclui o arquivo de configuração do banco de dado
include "./Conexao/config.php";

// Verifica se o usuário está logado; se não estiver, redireciona para a página de login
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

// Obtém o nome de usuário da sessão
$logado = $_SESSION['usuario'];

// Verifica se há um parâmetro de pesquisa na URL ($_GET)
if (!empty($_GET['search'])) {
    // Se houver, filtra os resultados com base na pesquisa
    $data = $_GET['search'];
    $sql = "SELECT * FROM pessoas WHERE cpf LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY cod DESC";
} else {
    // Se não houver parâmetro de pesquisa, seleciona todos os registros no banco de dados
    $sql = "SELECT * FROM pessoas ORDER BY cod DESC";
}

// Executa a consulta no banco de dados
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pesquisa de Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./css/sistema.css" rel="stylesheet">
    <link rel="icon" href="./img/favicon.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="btn btn-danger me-5" href="#" onclick="CriarPDF()">SISTEMA DE PESQUISA DE USUARIOS</a>
            <a class="btn btn-danger me-5" href="home.php" >Tela Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <button type="button" class="btn btn-info" value="Criar PDF" id="btnImprimir" onclick="CriaPDF()">Criar PDF</button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
    // Exibe uma mensagem de boas-vindas com o nome de usuário
    echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>

    <div class="table-responsive">
        <div id="tabela">
            <table class="table text-white table-bg table-spaced">
                <thead>
                    <tr>
                        <th scope="col">Cod</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Nome da Mãe</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Data nascimento</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Endereco</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">uf</th>
                        <th scope="col">Complemento</th>
                        <th scope="col">Telefone fixo</th>
                        <th scope="col">Telefone_celular</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    // Loop para exibir os dados do banco de dados na tabela                
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['cod'] . "</td>";
                        echo "<td>" . $user_data['nome'] . "</td>";
                        echo "<td>" . $user_data['nome_materno'] . "</td>";
                        echo "<td>" . $user_data['cpf'] . "</td>";
                        echo "<td>" . $user_data['data_nascimento'] . "</td>";
                        echo "<td>" . $user_data['email'] . "</td>";
                        echo "<td>" . $user_data['sexo'] . "</td>";
                        echo "<td>" . $user_data['cep'] . "</td>";
                        echo "<td>" . $user_data['endereco'] . "</td>";
                        echo "<td>" . $user_data['cidade'] . "</td>";
                        echo "<td>" . $user_data['uf'] . "</td>";
                        echo "<td>" . $user_data['bairro'] . "</td>";
                        echo "<td>" . $user_data['complemento'] . "</td>";
                        echo "<td>" . $user_data['telefone_fixo'] . "</td>";
                        echo "<td>" . $user_data['telefone_celular'] . "</td>";
                        echo "<td>" . $user_data['usuario'] . "</td>";
                        echo "<td>" . $user_data['senha'] . "</td>";
                        echo "<td>
                    
                        <a class='btn btn-sm btn-primary' href='edit.php?cod=$user_data[cod]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?cod=$user_data[cod]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</body>
<script src="./js/sistema.js"></script>

</html>