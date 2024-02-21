<?php
    // Inclui o arquivo de configuração do banco de dados
    include "./Conexao/config.php";
    
    // Verifica se o parâmetro 'cod' não está vazio na URL ($_GET)
    if(!empty($_GET['cod']))
    {
        // Obtém o valor do parâmetro 'cod' da URL
        $cod = $_GET['cod'];

        // Constrói a consulta SQL para selecionar dados com base no código recebido
        $sqlSelect = "SELECT * FROM pessoas WHERE cod=$cod";

         // Executa a consulta SQL
        $result = $conexao->query($sqlSelect);

         // Verifica se há pelo menos uma linha no resultado da consulta
        if($result->num_rows > 0)
        {   
            // Loop para obter os dados do usuário
            while($user_data = mysqli_fetch_assoc($result))
            {
                 // Atribui os dados do usuário a variáveis individuais
                $nome = $user_data['nome'];
                $nome_materno = $user_data['nome_materno'];
                $cpf = $user_data['cpf'];
                $data_nascimento = $user_data['data_nascimento'];
                $email = $user_data['email'];
                $sexo = $user_data['sexo'];
                $cep = $user_data['cep'];
                $endereco = $user_data['endereco'];
                $bairro = $user_data['bairro'];
                $cidade = $user_data['cidade'];
                $uf = $user_data['uf'];
                $complemento = $user_data['complemento'];
                $telefone_fixo = $user_data['telefone_fixo'];
                $telefone_celular = $user_data['telefone_celular'];
                $usuario = $user_data['usuario'];
                $senha = $user_data['senha'];
              
            }
        }
        else
        {
            // Se não houver resultados, redireciona de volta para a página do sistema
            header('Location: sistema.php');
        }
    }
    else
    {
        // Se o parâmetro 'cod' estiver vazio, redireciona de volta para a página do sistema
        header('Location: sistema.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


  <!-- Importe a biblioteca jQuery -->
  <script type="text/javascript" src="./js/jquery.js"></script>

  <!--titulo do navegador-->
  <title>Editar Cliente</title>

  <!--estilos do formulario-->
  <link href="./css/form.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="icon" href="./img/favicon.png" type="image/x-icon">

  <script type="text/javascript" src="./js/jquery.mask.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/formulario.css">
  <link rel="stylesheet" href="./css/edit.css">
  <link rel="stylesheet" href="./css/navbar.css">
  
  </head>

<body>
<?php
        $head =  include_once './navbar.php';
    ?>

  <h1>Alterar dados</h1>
  <br>
  <!--campo Logo do form-->
  <div class="container ">
    <a href="./">
      <img src="./img/logo.png" id="img" class="img-fluid"><br>
    </a>

    <form  action="saveEdit.php" method="POST">
      
      <div class="row">
        <!--campo Nome-->
        <div class="col-md-4 mb-3">
          <label for="nomeform">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nomeform" size="6" minlength="15" maxlength="80"
            placeholder="Digite Aqui" oninput="maiuscula(this)" required value=<?php echo $nome;?>>
        </div>

        <!--campo Materno-->
        <div class="col-md-4 mb-3">
          <label for="nomemae">Nome Materno:</label>
          <input type="text" class="form-control" name="nome_materno" id="nomemae" minlength="15" maxlength="80"
            placeholder="Digite Aqui " oninput="maiuscula(this)" required value=<?php echo $nome_materno;?>>
        </div>

        <!--campo de CPF-->
        <div class="col-md-3 mb-3">
          <label for="cpfform">CPF:</label>
          <input type="text" class="form-control" id="cpfform" onblur="valida(this)" name="cpf"
            placeholder="Digite Aqui" required value=<?php echo $cpf;?>>
        </div>

        <!--campo de Data de nascimento-->
        <div class="col-md-2 mb-3">
          <label for="validationTooltip02">Data de Nascimento:</label>
          <input type="date" name="data_nascimento" class="form-control" id="validationTooltip02" max="2005-12-31" placeholder="Digite Aqui"
            required value=<?php echo $data_nascimento;?>>
        </div>

        <!--campo de E-mail-->

        <div class="col-md-6 mb-3">
          <label for="emailform">Email:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email" name="email" class="form-control" id="emailform" placeholder="Digite Aqui" required value=<?php echo $email;?>>
          </div>
          <!--Campo Sexo-->
          <div class="col-md-4 mb-3">
            <label for="sexo">Sexo:</label>
            <select class="form-control" id="sexo" name="sexo" aria-placeholder="Escolha" value=<?php echo $sexo;?>>
              <option value="outros"<?php echo ($sexo == 'outro') ? 'checked' : '';?>>Prefiro não informar</option>
              <option value="masculino"<?php echo ($sexo == 'masculino') ? 'checked' : '';?>>Masculino</option>
              <option value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?>>Feminino</option>
            </select>
          </div>
        </div>

      </div>

      <!--Campo de endereço completo-->
      <div class="row">
        <div class="col-md-2 mb-3">
          <label for="CEPform">CEP:</label>
          <input type="text" class="form-control" id="CEPform" name="cep" required value=<?php echo $cep;?>>
        </div>

        <div class="col-md-3 mb-3">
          <label for="endform">Endereço:</label>
          <input type="text" class="form-control" id="endform" name="endereco" placeholder="Logradouro" readonly 
            required value=<?php echo $endereco;?>>
        </div>

        <div class="col-md-3 mb-3">
          <label for="bairroform">Bairro:</label>
          <input type="text" class="form-control" id="bairroform" name="bairro" placeholder="Bairro"  readonly required value=<?php echo $bairro;?>>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2 mb-3">
          <label for="cidadeform">Cidade:</label>
          <input type="text" class="form-control" id="cidadeform" name="cidade" placeholder="Cidade" readonly  required value=<?php echo $cidade;?>>
        </div>

        <div class="col-md-1 mb-3">
          <label for="ufform">UF:</label>
          <input type="text" class="form-control" id="ufform" name="uf" placeholder="UF"  readonly required value=<?php echo $uf;?>>
        </div>

        <div class="col-md-2 mb-3">
          <label for="numform">N° / Complemento:</label>
          <input type="text" class="form-control" id="numform" name="complemento" onkeypress="(this)" onkeyup="(this)" maxlength="60"
            required value=<?php echo $complemento;?>>
        </div>
      </div>

      <!--campo telefone fixo e celular-->
      <div class="row">
        <div class="col-md-3 mb-3">
          <label for="telform">Telefone:</label>
          <input type="text" class="form-control" id="telform" name="telefone_fixo" placeholder="Telefone fixo" value=<?php echo $telefone_fixo;?> >
        </div>

        <div class="col-md-3 mb-3">
          <label for="celform">Celular:</label>
          <input type="text" class="form-control" id="celform" name="telefone_celular" placeholder="Telefone Celular"  required value=<?php echo $telefone_celular;?>>
        </div>
      </div>

      <!--campo de Login e senha-->
      <div class="row">
        <div class="col-md-2 mb-3">
          <label for="loginform">Login:</label>
          <input class="form-control" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)" ,
            onkeyup="ajustaLoginSenha(this)" type="text" name="usuario" size="6" maxlength="6" id="loginform" required value=<?php echo $usuario;?>>
        </div>

        <div class="col-md-3 mb-3">
          <label for="senha">Senha:</label>
          <input class="form-control" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)" ,
            onkeyup="ajustaLoginSenha(this)" name="senha" type="password" id="senha" size="8" maxlength="8" placeholder="Senha"
            required value=<?php echo $senha;?>>
        <i class="bi bi-eye-fill " id="showPassword"></i>
        </div>
        <div class="col-md-3 mb-3">
          <label for="confirmasenha">Confirmar Senha:</label>
          <input class="form-control" name="confirma_senha" onkeydown="ajustaLoginSenha(this)" ,
            onkeypress="ajustaLoginSenha(this)" , onkeyup="ajustaLoginSenha(this)" type="password" id="confirmasenha"
            minlength="8" maxlength="8" placeholder="Senha" required >
          
        </div>
        <div class="col-md-3 mb-3">
                    <label for="tipo">Tipo de Usuário:<br>(1 para comum, 2 para Master)</label>
                    <input class="form-control"  type="number" name="tipo" min="1" max="2" required> <br>

                </div>

      </div>

      <br><br>
				        <input type="hidden" name="cod" value=<?php echo $cod;?>>
                <input type="submit" name="update" id="submit">
      
  </div>

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./js/form.js"></script>
  <script src="./js/navbar.js"></script>
</body>

</html>