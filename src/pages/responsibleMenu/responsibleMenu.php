<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css Links -->
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/reset.css" />

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

    <title>iChild</title>
  </head>

  <body>
    <aside class="aside__bar">
      <div id="menu__bar">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="40"
          height="40"
          fill="currentColor"
          class="bi bi-x menu__bar-icon"
          viewBox="0 0 16 16"
        >
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
          />
        </svg>
        <ul>
          <li><a href="">MENU</a></li>
          <li><a href="">DEPENDENTES</a></li>
          <li><a href="">ADICIONAR DEPENDENTES</a></li>
          <li><a href="">LOG DO DIA</a></li>
          <li><a href="">AGENDA</a></li>
        </ul>
      </div>
    </aside>

    <header class="container__header-app">
      <div class="app__nav">
        <img src="../../img/navbarIcon.png" alt="" id="app__nav-icon" />
        <img src="../../img/favicon-ichild.png" alt="" class="logo-img" />
      </div>
      <div class="app__nav-profile">
        <img src="../../img/profile.png" alt="" class="profile-img" />
        <div class="nav__profile">
          <ul>
            <li><a href="">PERFIL</a></li>
            <li><a href="">SAIR</a></li>
          </ul>
        </div>
      </div>
    </header>

    <main class="container__main-app">
      <div class="main__app-content">
        <div class="content__card card__dependents">
          <div class="card__container">
            <p class="card__title">Dependentes</p>
            <div class="card__dependents-content"></div>
            <div class="card__dependents-content"></div>
            <div class="card__dependents-content"></div>
            <a class="card__button" href=""><button>Ver tudo</button></a>
          </div>
        </div>

        <div class="content__card card__log">
          <div class="card__container">
            <p class="card__title">Log do dia</p>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <div class="card__log-content"></div>
            <a class="card__button" href=""><button>Ver tudo</button></a>
          </div>
        </div>

        <div class="content__card card__schedule">
          <div class="card__container">
            <p class="card__title">Agenda</p>
            <div class="card__schedule-content"></div>
            <div class="card__schedule-content"></div>
          </div>
        </div>

        <div class="content__card card__notifications">
          <div class="card__container">
            <p class="card__title">Notificações</p>
            <div class="card__notifications-content"></div>
            <div class="card__notifications-content"></div>
            <div class="card__notifications-content"></div>
            <a class="card__button" href=""><button>Ver tudo</button></a>
          </div>
        </div>

        <div class="content__card card__config">
          <div class="card__container container__add">
            <p class="card__title-add">Adicionar dependentes ></p>
            <img src="../../img/child-image.png" alt="" class="config__img" />
          </div>
        </div>

        <div class="content__card card__config">
          <div class="card__container container__config">
            <p class="card__title-config">Configurar dependentes ></p>
            <img src="../../img/child-config.png" alt="" class="config__img" />
          </div>
        </div>
      </div>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
