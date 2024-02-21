<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'empresa';
    
try {
    $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo"Conexão realizada com sucesso";
} catch (PDOException $e) {
    echo "Erro de conexão com banco ". $e->getMessage();
}
?>