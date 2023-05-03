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
    ; ?>
    <?php require '../../components/headerMenu.php';?>

    <main class="container__main-reponsibleInfo">
    <form class="container__responsibleInfo-content row g-1 container-sm gap-1" method="post" action="">
        <p class="col-md-7 container__form-text">Suas informações:</p>

        <div class="col-md-7 mt-3">
          <label for="infoNameDependent" class="form-label">Nome</label>
          <input type="text" value="" class="form-control disabled" id="infoNameDependent" name="nomeDependente" disabled/>
          <span id="name-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoLastnameDependent" class="form-label">Sobrenome</label>
          <input type="text" value="" class="form-control disabled" id="infoLastname" name="sobrenomeDependente" required disabled/>
          <span id="lastname-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoBirthDependent" class="form-label">Data de nascimento</label>
          <input type="date" value="" class="form-control disabled" id="infoBirthDependent" required name="birthDependente" disabled />
          <span id="birth-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoDocumentDependent" class="form-label">Documento</label>
          <input type="text" value="" class="form-control disabled" id="infoDocumentDependent"  name="documentoDependente" disabled/>
          <span id="document-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoTurnDependent" class="form-label">Turno</label>
          <select value="" class="form-control disabled" id="infoTurnDependent"  name="turnoDependente" disabled>
            <option selected>Escolher..</option>
            <option value="Matutino" >Matutino</option>
            <option value="Verpertino" >Verpertino</option>
            <option value="Noturno" >Noturno</option>
            <option value="Integral" >Integral</option>
          </select>
          <span id="turn-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoTransportDependent" class="form-label">Transporte</label>
          <select value="" class="form-control disabled" id="infoTransportDependent" required name="rua" disabled>
            <option selected>Escolher..</option>
            <option></option>
          </select>
          <span id="street-error" class="error"></span>
        </div>

        <button id="btnEdit" class="col-md-7 info__btn-edit mt-3">
          Editar informações
        </button>
        <button id="btnSave" class="col-md-5 info__btn-edit form-disabled mt-3">
          Salvar
        </button>
        <button id="btnCancel" class="col-md-2 info__btn-edit form-disabled mt-3">
          Cancelar
        </button>
      </form>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Info -->
    <script src="./dependentUpdate.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>