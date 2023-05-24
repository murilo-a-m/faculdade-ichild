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
  ;?>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <?php require '../../components/headerMenu.php';?>
    
  <?php 
    $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

    

    if (!$conn) {
      die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
    }

    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,'SET character_set_connection=utf8');
    mysqli_query($conn,'SET character_set_client=utf8');
    mysqli_query($conn,'SET character_set_results=utf8');

    //$transportadorId = $_GET[id];

    $sql = "SELECT horario, nome, statusLog, localLog
            FROM ichild.Log_do_dia;
            WHERE id = $transportadorId";


  ;?>


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

      <div class="col-md-8 mt-2">
        <label for="inputTurn" class="form-label">Dependente</label>
        <select id="inputTurn" class="form-select" name="turno">
          <option selected >Escolher..</option>
          <option value="" ></option>
        </select>
        <span id="turn-error" class="error"></span>
      </div>

      <div class="col-md-8 mt-2">
        <label for="inputDocument" class="form-label">Status</label>
        <input  value="<?php echo ($status);?>" class="form-control" id="inputDocument" name="documento"/>
        <span id="document-error" class="error"></span>
      </div>

      <div class="col-md-8 mt-2">
        <label for="inputDocument" class="form-label">Local</label>
        <input  value="<?php echo ($local);?>" class="form-control" id="inputDocument" name="documento"/>
        <span id="document-error" class="error"></span>
      </div>

      <button type="submit" class="col-md-6 form__btn-save">
        Salvar Status
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
