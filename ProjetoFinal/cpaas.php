<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>CPAAS</title>
  <link   href="./css/navbar.css"rel="stylesheet">
  <link rel="icon" href="./img/favicon.png" type="image/x-icon">
 </head>

<body>
<?php
  $head =  include_once 'navbar.php';
  ?>
    <main class="main1">

      <div class="media flipped">
        <div class="image"><img src="./img/modavosol.png" alt="" width="500"></div>
        <div class="content">
          <h1 text-align: justify; style="color: #007bff;">CPaaS: O que é?</h1> <br>
          CPaaS, ou Plataforma de Comunicação como Serviço, é uma solução que possibilita às empresas
          a integração simplificada de canais de comunicação em tempo real, como mensagens SMS e chamadas
          de voz, aos seus sistemas. Através das nossas APIs, sua empresa pode aprimorar significativamente
          a comunicação com os clientes de maneira automatizada e totalmente integrada.
        </div>
      </div>

      <div class="media flipped">
        <div class="image"><img src="./img/modavo2.png" alt="" width="500"></div>
        <div class="content">
          <h1 text-align:justify; style="color: #007bff;">CPaaS e a Transformação Digital</h1> <br>
          <p text-align: justify;>
            O CPaaS, com sua <strong> escalabilidade,
              flexibilidade, autenticação e segurança </strong>
            aprimoradas, está <strong>revolucionando</strong> o modo como
            as empresas habilitadas em nuvem implementam
            <strong>comunicações de voz, SMS e vídeo.</strong>
          <ul>
            <li>Expectativa de crescimento estimado de <strong>$8,2 bilhões</strong> em 2021</li>
            <li><strong>85%</strong> dos profissionais se conectam de maneira diferente com colegas e clientes
              do que
              faziam há apenas 5 anos.</li>
            <li>As receitas de CPaaS estão crescendo mais de <strong>40%</strong> ao ano.</li>
            <li><strong>CPaaS</strong> já ultrapassou o mercado de <strong>UCaaS</strong>(Unified Communication
              as a
              Service).</li>
            <li>Marcas que estão em <strong>múltiplos canais</strong> melhoram a experiência do usuário e
              aumentam
              seus resultados.</li>
          </ul>
          </p>
        </div>
      </div>


      <div class="divlista">
        <img src="./img/logistica.jpeg" alt="">
        <h3>Logística</h3>
        <ul>
          <li>Acesso seguro com 2FA.</li>
          <li>Uso de números mascarados para proteção de funcionário e cliente.</li>
          <li>Mantenha o cliente informado sobre entrega e serviços.</li>
          <li>Verified calling para confirmação de entregas.</li>
        </ul>
      </div>



      <div class="divlista">
        <img src="./img/varejo.jpeg" alt="">
        <h3>Varejo</h3>
        <ul>
          <li>Compra segura com 2FA.</li>
          <li>Avisos sobre compras e entregas.</li>
          <li>Upsell com novas ofertas evantagens via SMS ou Verified Calling. </li>
        </ul>
      </div>

      <div class="divlista">
        <img src="./img/callcenter.jpeg" alt="">
        <h3>Call Center</h3>
        <ul>
          <li>Melhore taxas de abertura utilizando alertas SMS para confirmações. </li>
          <li>Economia de números com o uso de um único número máscara por todos os agentes.</li>
          <li>Verified Calling para confirmação de agendamentos.</li>
        </ul>
      </div>

      <div class="divlista">
        <img src="./img/saude.jpeg" alt="">
        <h3>Saúde</h3>
        <ul>
          <li>Acesso seguro com 2FA.</li>
          <li>Melhore o agendamento e reduza faltas com lembretes por SMS </li>
          <li>Tokens de autorização para procedimentos com 2FA.</li>
          <li>Verified Calling para avisos de resultados e agendamentos.</li> <br>
        </ul>
      </div>
      </section>



      <div class="exemplo"><img src="./img/2faa.png" alt=""></div><br>
      <a class="btn btn-primary" href="2fa.php">Saiba Mais</a>

    </main>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/navbar.js"></script>
  </body>

</html>