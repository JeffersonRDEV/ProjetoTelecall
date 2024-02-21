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
    <script type="text/javascript" src="./js/jquery.mask.js"></script>
</head>

<body>
    <?php
    $head =  include_once './navbar.php';
    
    ?>
    <br>
    <!--campo Logo do form-->
    <div class="container ">
        <form id="myForm" action="inserir.php" method="POST">


            <div class="row">
                <!--campo Nome-->
                <div class="col-md-4 mb-3">
                    <label for="nomeform">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nomeform" size="6" minlength="15" maxlength="80" placeholder="Digite Aqui" oninput="maiuscula(this)" required>
                </div>

                <!--campo Materno-->
                <div class="col-md-4 mb-3">
                    <label for="nomemae">Nome Materno:</label>
                    <input type="text" class="form-control" name="nome_materno" id="nomemae" minlength="15" maxlength="80" placeholder="Digite Aqui " oninput="maiuscula(this)" required>
                </div>

                <!--campo de CPF-->
                <div class="col-md-3 mb-3">
                    <label for="cpfform">CPF:</label>
                    <input type="text" class="form-control" id="cpfform" onblur="valida(this)" name="cpf" placeholder="Digite Aqui" required>
                </div>

                <!--campo de Data de nascimento-->
                <div class="col-md-2 mb-3">
                    <label for="validationTooltip02">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" class="form-control" id="validationTooltip02" max="2005-12-31" placeholder="Digite Aqui" required>
                </div>

                <!--campo de E-mail-->

                <div class="col-md-6 mb-3">
                    <label for="emailform">Email:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="email" name="email" class="form-control" id="emailform" placeholder="Digite Aqui" required>
                    </div>
                    <!--Campo Sexo-->
                    <div class="col-md-4 mb-3">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control" id="sexo" name="sexo" aria-placeholder="Escolha">
                            <option value="outros">Prefiro não informar</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                </div>

            </div>

            <!--Campo de endereço completo-->
            <div class="row">
                <div class="col-md-2 mb-3">
                    <label for="CEPform">CEP:</label>
                    <input type="text" class="form-control" id="CEPform" name="cep" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="endform">Endereço:</label>
                    <input type="text" class="form-control" id="endform" name="endereco" placeholder="Logradouro" readonly required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="bairroform">Bairro:</label>
                    <input type="text" class="form-control" id="bairroform" name="bairro" placeholder="Bairro" readonly required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 mb-3">
                    <label for="cidadeform">Cidade:</label>
                    <input type="text" class="form-control" id="cidadeform" name="cidade" placeholder="Cidade" readonly required>
                </div>

                <div class="col-md-1 mb-3">
                    <label for="ufform">UF:</label>
                    <input type="text" class="form-control" id="ufform" name="uf" placeholder="UF" readonly required>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="numform">N° / Complemento:</label>
                    <input type="text" class="form-control" id="numform" name="complemento" onkeypress="(this)" onkeyup="(this)" maxlength="60" required>
                </div>
            </div>

            <!--campo telefone fixo e celular-->
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="telform">Telefone:</label>
                    <input type="text" class="form-control" id="telform" name="telefone_fixo" placeholder="Telefone fixo">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="celform">Celular:</label>
                    <input type="text" class="form-control" id="celform" name="telefone_celular" placeholder="Telefone Celular" required>
                </div>
            </div>

            <!--campo de Login e senha-->
            <div class="row">
                <div class="col-md-2 mb-3">
                    <label for="loginform">Login:</label>
                    <input class="form-control" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)" , onkeyup="ajustaLoginSenha(this)" type="text" name="usuario" size="6" maxlength="6" id="loginform" oninput="maiuscula(this)" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="senha">Senha:</label>
                    <input class="form-control" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)" , onkeyup="ajustaLoginSenha(this)" name="senha" type="password" id="senha" size="8" maxlength="8" placeholder="Senha" required>
                    <i class="bi bi-eye-fill " id="showPassword"></i>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="confirmasenha">Confirmar Senha:</label>
                    <input class="form-control" name="confirma" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)" , onkeyup="ajustaLoginSenha(this)" type="password" id="confirmasenha" minlength="8" maxlength="8" placeholder="Senha" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="tipo">Tipo de Usuário:<br>(1 para comum, 2 para Master)</label>
                    <input class="form-control"  type="number" name="tipo" min="1" max="2" required> <br>

                </div>
            </div>
            

            <button class="btn btn-primary" name="cadastrar" type="submit">Cadastrar</button>
            <button type="reset" class="btn btn-dark">Limpar</button>
            
    </div>

    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="./js/formulario.js"></script>
    <script src="./js/navbar.js"></script>
  


</body>

</html>