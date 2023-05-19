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
        class="container__form-content row g-1 container-md gap-2"
        name="formAdd"
        id="formAdd"
        method="post"
        action="./scheduleAddExe.php"
      >
        <p class="col-md-8 container__form-text">Agendar evento:</p>

        <div class="col-md-8 mt-2">
          <label for="date" class="form-label">Data</label>
          <input type="date" class="form-control" id="data" name="data" value="<?php echo $date->format("Y-m-d") ?>"/>
          <span id="data-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="time" class="form-label">Horas</label>
          <input type="time" class="form-control" id="time" name="time" value="<?php echo $date->format("H:i") ?>"/>
          <span id="time-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="title" class="form-label">Título</label>
          <input type="title" class="form-control" id="title" name="title"/>
          <span id="title-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="desc" class="form-label">Descrição</label>
          <input type="desc" class="form-control" id="desc" name="desc"/>
          <span id="desc-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="duration" class="form-label">Duração</label>
          <select id="duration" class="form-select" name="duration">
            <option selected value="">Escolher...</option>
            <option value="1" >1h</option>
            <option value="2" >2h</option>
            <option value="3" >3h</option>
          </select>
          <span id="duration-error" class="error"></span>
        </div>

        <button type="submit" class="col-md-8 form__btn-save">
          Agendar
        </button>
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


