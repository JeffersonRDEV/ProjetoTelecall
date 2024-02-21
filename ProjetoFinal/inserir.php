<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Importe a biblioteca jQuery -->
  <script type="text/javascript" src="./js/jquery.js"></script>

  <!--titulo do navegador-->
  <title>Cadastro</title>

  <!--estilos do formulario-->
  <link href="./css/formulario.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="icon" href="./img/favicon.png" type="image/x-icon">

  <script type="text/javascript" src="./js/jquery.js"></script>
  <script type="text/javascript" src="./js/jquery.mask.js"></script>


</head>

<body>
  <br>
  <!--campo Logo do form-->
  <div class="container">
    <div class="row">
      <?php
      // Incluindo o arquivo de conexão com o banco de dados
      include "./Conexao/config.php";
      if (isset($_POST['cadastrar'])) {
        # code...
        
        // Obtendo os dados do formulário usando o método POST
        $nome = $_POST['nome']; // Obtendo o nome do formulário
        $nome_materno = $_POST['nome_materno']; // Obtendo o nome da mãe do formulário
        $cpf = $_POST['cpf']; // Obtendo o CPF do formulário
        $data_nascimento = $_POST['data_nascimento']; // Obtendo a data de nascimento do formulário
        $email = $_POST['email']; // Obtendo o email do formulário
        $sexo = $_POST['sexo']; // Obtendo o sexo do formulário
        $cep = $_POST['cep']; // Obtendo o CEP do formulário
        $endereco = $_POST['endereco']; // Obtendo o logradouro do formulário
        $bairro = $_POST['bairro']; // Obtendo o bairro do formulário
        $cidade = $_POST['cidade']; // Obtendo a cidade do formulário
        $uf = $_POST['uf']; // Obtendo o estado do formulário
        $complemento = $_POST['complemento']; // Obtendo o número e complemento do formulário
        $telefone_fixo = $_POST['telefone_fixo']; // Obtendo o telefone do formulário
        $telefone_celular = $_POST['telefone_celular']; // Obtendo o celular do formulário
        $usuario = $_POST['usuario']; // Obtendo o nome de usuário do formulário
        $senha = $_POST['senha']; // Obtendo a senha do formulário
        $confirma = $_POST['confirma'];
        $tipo = $_POST['tipo'];
        setcookie("tipo",$tipo); 

        $varUsuario = $_POST['usuario'];
        $varUsuario = $_POST['tipo'];
        
        
        // Consulta SQL para verificar se o usuário existe
        $sql = "SELECT * FROM `pessoas` WHERE usuario = '$varUsuario'";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
          echo "<H1>Login $varUsuario já existente! Tente novamente.</H!><hr>
          <a href='formulario.php' class='btn btn-info'>Voltar para validação</a>";

      } else {             // Executando a consulta SQL para inserir os dados no banco de dados
        $result = mysqli_query($conexao, "INSERT INTO pessoas (nome,nome_materno,cpf,data_nascimento,email,sexo,cep,endereco,bairro,cidade,uf,complemento,telefone_fixo,telefone_celular,usuario,senha,tipo) 
        VALUES ('$nome','$nome_materno','$cpf','$data_nascimento','$email','$sexo','$cep','$endereco','$bairro','$cidade','$uf','$complemento','$telefone_fixo','$telefone_celular','$usuario','$senha','$tipo')");

        header('Location: login.php');
      }

    }
      ?>

    </div>
  </div>

  <script src="./js/formulario.js"></script>
</body>

</html>