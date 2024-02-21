<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!--Favicon-->
  <link rel="icon" href="./img/favicon.png" type="image/x-icon">
  <!--estilos do formulario-->
  <link href="./css/recuperar.css" rel="stylesheet">
  <link href="./css/navbar.css" rel="stylesheet">
    <title>Recuperar Senha</title>
</head>

<body>
<?php
        $head =  include_once 'navbar.php';
    ?>
  
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Recuperar Senha</div>
                    <div class="card-body">
                        <form action="processar_recuperacao.php" method="post">

                            <div class="form-group">
                                <label for="email" class="letras">Endereço de E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <a href="erro.php" class="btn btn-primary btn-block">Enviar E-mail de Recuperação</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS do Bootstrap (links para a versão mais recente do Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./js/recuperar.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>
