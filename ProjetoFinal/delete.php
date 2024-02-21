<?php
    // Verifica se o parâmetro 'cod' não está vazio na URL ($_GET)
    if(!empty($_GET['cod']))
    {
        // Inclui o arquivo de configuração do banco de dados
        include "./Conexao/config.php";
        
        // Obtém o valor do parâmetro 'cod' da URL
        $cod = $_GET['cod'];

        // Constrói a consulta SQL para selecionar dados com base no código recebido
        $sqlSelect = "SELECT *  FROM pessoas WHERE cod=$cod";
        
        // Executa a consulta SQL
        $result = $conexao->query($sqlSelect);
        
        // Verifica se há pelo menos uma linha no resultado da consulta
        if($result->num_rows > 0)
        {
             // Se houver resultados, constrói a consulta SQL para deletar o registro
            $sqlDelete = "DELETE FROM pessoas WHERE cod=$cod";

            // Executa a consulta SQL de delete
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    // Redireciona de volta para a página do sistema após o processo de deleção
    header('Location: sistema.php');
   
?>