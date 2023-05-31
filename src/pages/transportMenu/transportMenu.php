<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css Links -->
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/eset.css" />

    <!-- Bootstrap links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <!-- Favicon link -->
    <link
      rel="shortcut icon"
      href="../../img/favicon-ichild.png"
      type="image/x-icon"
    />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>iChild</title>
  </head>

  <body>
    <?php 
      session_start();
      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'transportador'  ){
        header('location: ../loginTransport/loginTransport.php?erro=true');
        exit;
      }
    ;?>

    <?php require '../../components/headerTransportMenu.php';?>

    <?php
      if (isset($_GET['status'])){
        if ($_GET['status'] == 'logged'){
        echo 
        "<script>
          Swal.fire(
            'Olá!',
            'Seja bem-vindo!',
            'success'
          ).then(function() {
            window.location = './responsibleMenu.php';
        })
        </script>";
        }
      }
    ;?>

    <main class="container__main-transportMenu">
      <div class="main__transport-content">

        <?php require './dependentsCard.php' ;?>

        <div class="content__card-transport card__log">
          <div class="card__container">
            <p class="card__title">Log do dia</p>
            <div class="card__log-transportContent">
              <div class="log__lightTransport"></div>
              <p class="log__text">14:30 - Chegou na escola</p>
            </div>
            <div class="card__log-transportContent"></div>
            <div class="card__log-transportContent"></div>
            <div class="card__log-transportContent"></div>
            <div class="card__log-transportContent"></div>
            <div class="card__log-transportContent"></div>
            <a class="card__transportButton" href="../painelLog/painelLog.php"><button>Ver tudo</button></a>
          </div>
        </div>

        <div class="content__card-transport card__schedule">
          <div class="card__container">
            <p class="card__title">Agenda</p>
            <div class="card__schedule-transportContent">
              <img src="../../img/menu-item2-transporte.png" alt="" class="schedule__img" />
              <p id="clock" class="schedule__text"></p>
            </div>
            <a href="../transportSchedule/transportSchedule.php" class="card__schedule-transportContent">
              <img src="../../img/menu-item1-transporte.png" alt="" class="schedule__img" />
              <p class="schedule__text">Ver agenda</p>
            </a>
          </div>
        </div>

        <div class="content__card-transport card__notifications">
          <div class="card__container">
            <p class="card__title">Notificações enviadas</p>
            <div class="card__notifications-transportContent">
              <div class="notifications__transportLight"></div>
              <p class="notifications__text">Mensalidade atrasada</p>
            </div>
            <div class="card__notifications-transportContent"></div>
            <div class="card__notifications-transportContent"></div>
            <a class="card__transportButton" href=""><button>Ver tudo</button></a>
          </div>
        </div>

        <div class="content__card-transport card__config">
          <a
            href="../painelLog/criarLog.php"
            class="card__container container__config"
          >
            <p class="card__title-add">Novo log ></p>
            <img src="../../img/log-transporte.png" alt="" class="logTransport__img" />
          </a>
        </div>

        <div class="content__card-transport card__config">
          <a href="#" class="card__container container__config">
            <p class="card__title-config">Enviar notificação ></p>
            <img src="../../img/notificacao-transporte.png" alt="" class="logTransport__img" />
          </a>
        </div>
      </div>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Date -->
    <script src="../../utils/date.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>