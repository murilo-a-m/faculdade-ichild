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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
  
  <?php 
  session_start();
    require '../../components/headerTransportMenu.php';
    require_once '../../database/connection.php';
  ?>
  
  <main class="container__form container-fluid">
    <form
      class="container__form-content row g-1 container-md gap-2"
      id="form-dependent"
      method="post"
      action="registerDependentExe.php"
    >
      <p class="col-md-8 container__form-text">Update Log:</p>

      <div class="col-md-8 mt-2">
        <label for="time" class="form-label">Horario</label>
        <input  value="<?php echo ($horario);?>" type="time" class="form-control" />
        <span id="name-error" class="error"></span>
      </div>
      <?php
        require './horarioExe.php'
      ?>
      
      <?php 
        require './loadDependents.php';
      ?>

      <div class="col-md-8 mt-2">
        
        <div class="col-md-12 mt-2">
        <label for="inputStatus" class="form-label">Status</label>
          <select value="<?php echo ($statusLog); ?>" id="inputTurn" class="form-select" name="turno" required>
            <option selected>Escolher..</option>
            <option value="" >Em transito</option>
            <option value="" >Chegou ao destino</option>
          </select>
        <span id="turn-error" class="error"></span>
        </div>
      </div>

      <div class="col-md-8 mt-2">
        <label for="inputDocument" class="form-label">Local</label>
        <input class="form-control" id="inputDocument" name="documento" required/>
        <span id="document-error" class="error"></span>
      </div>

      <button type="submit" class="card__transportButton col-md-6 form__btn-save">
        Salvar Status
      </button>
      <button class="card__transportButton col-md-2 form__btn-cancel">Cancelar</button>
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
