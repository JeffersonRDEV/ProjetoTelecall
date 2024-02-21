<?php

 // Configurações do banco de dados
 $dbHost = 'Localhost';  // Host do banco de dados
 $dbUsername = 'root';   // Nome de usuário do banco de dados
 $dbPassword = '';       // Senha do banco de dados
 $dbName = 'empresa';    // Nome do banco de dados

// Cria uma nova instância de conexão com o banco de dados usando MySQLi
$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
 
// Verifica se houve erro na conexão
if($conexao->connect_errno)
     {
        // Se houver erro, exibe uma mensagem de erro
         echo "Erro";
     }
     else
     {
      // Se a conexão for bem-sucedida, exibe uma mensagem de sucesso
      //echo "Conexão efetuada com sucesso";
     }
?>
