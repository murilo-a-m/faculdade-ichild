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
      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
        header('location: ../login/login.php?erro=true');
        exit;
      }
    ;?>

    <?php require '../../components/headerMenu.php';?>

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

    <main class="container__main-app">
      <div class="main__app-content">

        <?php require './dependentsCard.php' ;?>

        <div class="content__card card__log">
          <div class="card__container">
            <p class="card__title">Log do dia</p>
            <div class="card__log-content">
              <div class="log__light"></div>
              <p class="log__text">14:30 - Chegou na escola</p>
            </div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <a class="card__button" href="../painelLog/painelLogDependent.php"><button>Ver tudo</button></a>
          </div>
        </div>

        <div class="content__card card__schedule">
          <div class="card__container">
            <p class="card__title">Agenda</p>
            <div class="card__schedule-content">
              <img src="../../img/menu-item2.png" alt="" class="schedule__img" />
              <p id="clock" class="schedule__text"></p>
            </div>
            <a href="../schedule/schedule.php" class="card__schedule-content">
              <img src="../../img/menu-item1.png" alt="" class="schedule__img" />
              <p class="schedule__text">Minha agenda</p>
            </a>
          </div>
        </div>

        <div class="content__card card__notifications">
          <div class="card__container">
            <p class="card__title">Notificações</p>
            <div class="card__notifications-content">
              <div class="notifications__light"></div>
              <p class="notifications__text">Mensalidade atrasada</p>
            </div>
            <div class="card__notifications-content"></div>
            <div class="card__notifications-content"></div>
            <a class="card__button" href=""><button>Ver tudo</button></a>
          </div>
        </div>

        <div class="content__card card__config">
          <a
            href="../registerDependent/registerDependent.php"
            class="card__container container__add"
          >
            <p class="card__title-add">Adicionar dependentes ></p>
            <img src="../../img/child-image.png" alt="" class="config__img" />
          </a>
        </div>

        <div class="content__card card__config">
          <a href="#" class="card__container container__config">
            <p class="card__title-config">Configurar dependentes ></p>
            <img src="../../img/child-config.png" alt="" class="config__img" />
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