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

    <?php 

      session_start();

      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
        header('location: ../login/login.php?erro=true');
        exit;
      }

    ; ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
      if (isset($_GET['erro'])){
        if ($_GET['erro'] == 'documentExists'){
          echo 
          "<script>
            Swal.fire('Documento já cadastrado!')
          </script>";
        }
      }
    ;?>

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

    <main class="container__form container-fluid">
      <form
        class="container__form-content row g-1 container-md gap-2"
        id="form-dependent"
        method="post"
        action="registerDependentExe.php"
      >
        <p class="col-md-8 container__form-text">Registrar dependente:</p>

        <div class="col-md-8 mt-2">
          <label for="inputName" class="form-label">Nome</label>
          <input class="form-control" id="inputName" name="nome" />
          <span id="name-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputLastName" class="form-label">Sobrenome</label>
          <input class="form-control" id="inputLastName" name="sobrenome" />
          <span id="lastName-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputBirth" class="form-label">Data de nascimento</label>
          <input type="date" class="form-control" id="inputBirth" name="dataNascimento"/>
          <span id="birth-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputDocument" class="form-label">Documento</label>
          <input class="form-control" id="inputDocument" name="documento"/>
          <span id="document-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputTurn" class="form-label">Turno</label>
          <select id="inputTurn" class="form-select" name="turno">
            <option selected>Escolher..</option>
            <option value="Matutino" >Matutino</option>
            <option value="Verpertino" >Verpertino</option>
            <option value="Noturno" >Noturno</option>
            <option value="Integral" >Integral</option>
          </select>
          <span id="turn-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2 mb-2">
          <label for="inputTransport" class="form-label">Transporte</label>
          <select id="inputTransport" class="form-select">
            <option selected>Escolher..</option>
            <option></option>
          </select>
          <span id="transport-error" class="error"></span>
        </div>

        <button type="submit" class="col-md-6 form__btn-save">
          Salvar dependente
        </button>
        <button class="col-md-2 form__btn-cancel">Cancelar</button>
      </form>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Regex -->
    <!-- <script src="./registerDependent.js"></script> -->

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
