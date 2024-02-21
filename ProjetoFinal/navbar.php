<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/home.css">
   
</head>

<body>
    <header>
        <nav>
            <label class="logo"><a href="./home.php"><img src="./img/logo.png"
                        id="logocall"></a></label>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
            <li class="dropdown"><a href="./er.php"  id="modeloErLink">Modelo ER</a>
                  
                </li>
                <li class="dropdown"><a href="construcao.php">Internet</a>
                    <div class="dropdown-menu">
                        <a href="construcao.php">Internet dedicada</a>
                        <a href="construcao.php">Banda larga</a>
                        <a href="construcao.php">Wi-fi</a>
                    </div>
                </li>
                <li class="dropdown"><a href="construcao.php">Telefonia</a>
                    <div class="dropdown-menu">
                        <a href="construcao.php">PABX IP Virtual</a>
                        <a href="construcao.php">E1/SIP TRUNK</a>
                        <a href="construcao.php">Número 0800 e 40 xx</a>
                    </div>
                </li>
                <li class="dropdown"><a href="construcao.php">Redes</a>
                    <div class="dropdown-menu">
                        <a href="construcao.php">Ponto-a-ponto</a>
                        <a href="construcao.php">MPLS</a>
                        <a href="construcao.php">Fibra apagada e dutos</a>
                        <a href="construcao.php">Co-locations</a>
                    </div>
                </li>
                <li class="dropdown"><a href="construcao.php">Mobilidade</a>
                    <div class="dropdown-menu">
                        <a href="construcao.php">Celular empresarial</a>
                        <a href="construcao.php">NVNA/E</a>
                    </div>
                </li>
                <li class="dropdown"><a href="./cpaas.php">CPaaS</a></li>
                </li>
                <li class="darkmode"><input onclick="myFunction()" type="checkbox" id="mode">
                    <div class="grid">
                        <div class="item bg-light">
                            <div class="flex">
                </li>

                <li class="dropdown"><a href="./2fa.php">2FA</a>

                <div class="user">
                <div id="user-info"></div>
                </div>

                </li>
                <li id="libtn"><a href="./login.php" class="navbtn">Entrar</a></a></li>
                <li id="libtn2"><a href="./formulario.php" class="nvcadastrar">Cadastrar</a></a>
                </li>
            </ul>
        </nav>
    </header>


    <script src="script.js"></script>
</body>

</html>