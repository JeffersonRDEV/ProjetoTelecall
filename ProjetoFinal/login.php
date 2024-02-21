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
  <title>Login</title>

  <!--estilos do formulario-->

  <link href="./css/navbar.css" rel="stylesheet">
  <link href="./css/loginnovo.css" rel="stylesheet">
  

  <!--Favicon-->
  <link rel="icon" href="./img/favicon.png" type="image/x-icon">

  <script type="text/javascript" src="./js/jquery.js"></script>
  <script type="text/javascript" src="./jquery.mask.js"></script>
</head>

<body>
  <?php
  $head =  include_once './navbar.php';
  
  ?>
  <br><br>
  <!--campo Logo do form-->
  <div class="container ">

    <form action="testLogin.php" method="POST">
      <div>
        <!--Campo Login-->
        <div>
          <div class="col-md-4 mb-3 mx-auto">
            <label for="validationTooltip03" class="hCor" id="chk">Login:</label>
            <input class="form-control" onkeydown="maiuscula(this)" onkeypress="maiuscula(this)" onkeyup="maiuscula(this)" type="text" name="usuario" size="6" maxlength="6" id="loginform" id="loginf" required placeholder="Login">

          </div>

          <!--Campo Senha-->
          <div class="col-md-4 mb-3 mx-auto">
            <label for="validationTooltip04" class="hCor">Senha:</label>
            <input class="form-control" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)" , onkeyup="ajustaLoginSenha(this)" type="password" name="senha" id="senha" size="8" maxlength="8" placeholder="Senha" required>
            <div class="invalid-tooltip">
              Please provide a valid state.
            </div><br>

            <!--Botão enviar e limpar-->
            <div class="text-center">
              <button class="btn btn-primary" name="submit" type="submit" value="Enviar">Entrar</button>
              <a href="recuperar.php" class="btn btn-reset btn-danger">Esqueceu sua senha?</a>
            </div>
          </div>
    </form>
  </div>
    <script src="./js/login.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>