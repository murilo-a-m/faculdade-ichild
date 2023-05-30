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

    <?php
      $date = null;
      if (isset($_GET['date'])) {
        $date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php require '../../components/headerMenu.php';?>

    <main class="container__form container-fluid">
      <form
        class="container__form-content row g-1 container-md gap-1"
        name="formAdd"
        id="formAdd"
        method="post"
        action="./scheduleAddExe.php"
      >
        <p class="col-md-8 container__form-text">Agendar evento</p>

        <div class="col-md-8 mt-3">
          <label for="dependente" class="form-label">Dependente</label>
          <select name="dependente" class="form-select" id="dependentSelect">
            <option value="">Selecione um dependente...</option>
            <?php require './scheduleDependents.php';?>
          </select>
          <span id="dependent-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-3">
          <label for="title" class="form-label">Título</label>
          <input type="text" class="form-control" id="title" name="title" required/>
        </div>

        <div class="col-md-7 mt-2">
          <label for="desc" class="form-label">Descrição</label>
          <input type="text" class="form-control" id="desc" name="desc" required/>
        </div>

        <div class="col-md-1 mt-2 color__div">
          <label for="color" class="form-label">Cor</label>
          <input type="color" class="form-control" id="color" name="color" value="#3ab5df"/>
        </div>

        <p class="col-md-8 container__form-paragraph mt-3">Data inicial:</p>

        <div class="col-md-8 mt-2">
          <label for="dateStart" class="form-label">Dia</label>
          <input type="date" class="form-control" id="dateStart" name="dateStart" value="<?php echo $date->format("Y-m-d") ?>"/>
          <span id="dataStart-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="timeStart" class="form-label">Horário</label>
          <input type="time" class="form-control" id="timeStart" name="timeStart" value="<?php echo $date->format("H:i") ?>"/>
          <span id="timeStart-error" class="error"></span>
        </div>

        <p class="col-md-8 container__form-paragraph mt-3">Data final:</p>

        <div class="col-md-8 mt-2">
          <label for="dateEnd" class="form-label">Dia</label>
          <input type="date" class="form-control" id="dateEnd" name="dateEnd" value="<?php echo $date->format("Y-m-d") ?>"/>
          <span id="dataEnd-error" class="error"></span>
        </div>
        
        <div class="col-md-8 mt-2">
          <label for="timeEnd" class="form-label">Horário</label>
          <input type="time" class="form-control" id="timeEnd" name="timeEnd" value="<?php echo $date->format("H:i") ?>"/>
          <span id="timeEnd-error" class="error"></span>
        </div>

        <button type="submit" class="col-md-8 form__btn-save mt-3">
          Agendar
        </button>
      </form>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Regex -->
    <script src="./scheduleVerify.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


