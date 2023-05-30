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
      require_once '../../database/connection.php';
      require '../../components/headerMenu.php';
    ; ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <main class="container__form container-fluid">
      <form
        class="container__form-content row g-1 container-md gap-2"
        id="form-dependent"
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
          <label for="inputTransport" class="form-label">Transportador</label>
          <select id="inputTransport" class="form-select" name="transportadorId">
            <option value="">Escolher..</option>
            <?php require './loadTransports.php' ?>
          </select>
          <span id="transport-error" class="error"></span>
        </div>

        <input type="hidden" id="transporterId" name="transporterId" value="">

        <button type="submit" class="col-md-6 form__btn-save">
          Salvar dependente
        </button>
        <button class="col-md-2 form__btn-cancel">Cancelar</button>
      </form>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Regex -->
    <script src="./registerDependent.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
  </body>
</html>
