<?php
    // isset -> serve para saber se uma variável está definida
    include "./Conexao/config.php";

    // Verifica se o formulário de atualização foi submetido
    if(isset($_POST['update']))
    {   
        // Obtém os dados do formulário
        $cod = $_POST['cod'];
        $tipo = $_POST['tipo'];
        $nome = $_POST['nome'];
        $nome_materno = $_POST['nome_materno'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $complemento = $_POST['complemento'];
        $telefone_fixo = $_POST['telefone_fixo'];
        $telefone_celular = $_POST['telefone_celular'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];


        // Constrói a query SQL para atualizar os dados no banco de dados
        $sqlInsert = "UPDATE pessoas 
        SET nome='$nome',nome_materno='$nome_materno',cpf='$cpf',data_nascimento='$data_nascimento',email='$email',sexo='$sexo',cep='$cep',endereco='$endereco',bairro='$bairro',
        cidade='$cidade',uf='$uf',complemento='$complemento',telefone_fixo='$telefone_fixo',
        telefone_celular='$telefone_celular',usuario='$usuario',senha='$senha',tipo='$tipo'
        WHERE cod=$cod";
 
        // Executa a query de atualização
        $result = $conexao->query($sqlInsert);

        // Exibe o resultado da query (pode ser utilizado para verificar se a atualização foi bem-sucedida)
        print_r($result);
    }

        // Redireciona de volta para a página do sistema após a atualização
        header('Location: sistema.php');

?>