<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet"  href="./css/navbar.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="./css/2fa.css">
    <link rel="icon" href="./img/favicon.png" type="image/x-icon">
    <title>Autenticação 2FA</title>
</head>

<body>
    <?php
    $head =  include_once './navbar.php';
    ?>
    <br>
    <section class="container" id="2FA">
        <div class="divtex">
            <p>
                <br>


            <h1>Autenticação 2FA</h1>
            <h4>Two-Factor Authentication</h4>
            <h5>Autenticação de dois fatores</h5>
            O 2FA é um procedimento de segurança que garante que serão
            necessários 2 fatores únicos para liberação de uma ação.
            O primeiro fator é a senha que o usuário e o segundo pode ser
            autenticado via token, via detecção de impressão digital,
            reconhecimento facial, código enviado via sms, entre outros.
         

            <ul>
                <div class="container">
                    <form class="form-inline">
                        <div class="col-md-3 mb-3">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Usuário" disabled>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Senha" disabled>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Código de Autenticação" disabled>
                            <button type="submit" class="btn btn-primary mb-2" disabled>Entrar</button>
                        </div>
                        <div class="media flipped"><img src="./img/cadeado.png" alt=""></div>
                    </form>

                </div>

            </ul>
            </p>
        </div>
    </section>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>