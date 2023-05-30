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
      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'transportador'  ){
        header('location: ../loginTransport/loginTransport.php?erro=true');
        exit;
      }; 

      $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

      if (!$conn) {
        die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
      }

      $id = $_GET['id'];
      session_write_close();

      $sql = "SELECT title, description, color, start, end, dependentId
              FROM ichild.Agendas
              WHERE id = $id";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            $title = $row['title'];
            $description = $row['description'];
            $color = $row['color'];
            $start = $row['start'];
            $end = $row['end'];
            $dependentId = $row['dependentId'];

            $sqlDependente = "SELECT nome, sobrenome FROM Dependentes WHERE id = $dependentId";
            $resultDependente = mysqli_query($conn, $sqlDependente);

            if ($rowDependente = mysqli_fetch_assoc($resultDependente)) {
              $nomeDependente = $rowDependente['nome'];
              $sobrenomeDependente = $rowDependente['sobrenome'];
          }
        }
      }
    }

      $dateStart = New DateTime($start);
      $dateEnd = New DateTime($end);
    ?>

    <?php
      $date = null;
      if (isset($_GET['date'])) {
        $date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php require '../../components/headerTransportMenu.php';?>

    <main class="container__form container-fluid container__main-reponsibleInfo">
      <form
        class="container__form-content row g-1 container-md gap-1"
        name="formInfo"
        id="formInfo"
        action="./transportSchedule.php"
      >
        <p class="col-md-7 container__form-text">Informações sobre o evento</p>

        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">

        <div class="col-md-7 mt-3">
          <label for="dependente" class="form-label">Dependente</label>
          <input type="text" class="form-control" id="dependente" name="dependente" value="<?php echo $nomeDependente . " " . $sobrenomeDependente ?>" disabled/>
          <span id="title-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="title" class="form-label">Título</label>
          <input type="title" class="form-control" id="title" name="title" value="<?php echo $title ?>" disabled/>
          <span id="title-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-2">
          <label for="desc" class="form-label">Descrição</label>
          <input type="desc" class="form-control" id="desc" name="desc" value="<?php echo $description ?>" disabled/>
          <span id="desc-error" class="error"></span>
        </div>

        <p class="col-md-7 container__form-paragraph mt-3">Data inicial:</p>

        <div class="col-md-7 mt-2">
          <label for="dateStart" class="form-label">Dia</label>
          <input type="date" class="form-control" id="dateStart" name="dateStart" value="<?php echo $dateStart->format("Y-m-d") ?>" disabled/>
          <span id="dataStart-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-2">
          <label for="timeStart" class="form-label">Horário</label>
          <input type="time" class="form-control" id="timeStart" name="timeStart" value="<?php echo $dateStart->format("H:i") ?>" disabled/>
          <span id="timeStart-error" class="error"></span>
        </div>

        <p class="col-md-7 container__form-paragraph mt-3">Data final:</p>

        <div class="col-md-7 mt-2">
          <label for="dateEnd" class="form-label">Dia</label>
          <input type="date" class="form-control" id="dateEnd" name="dateEnd" value="<?php echo $dateEnd->format("Y-m-d") ?>" disabled/>
          <span id="dataEnd-error" class="error"></span>
        </div>
        
        <div class="col-md-7 mt-2">
          <label for="timeEnd" class="form-label">Horário</label>
          <input type="time" class="form-control" id="timeEnd" name="timeEnd" value="<?php echo $dateEnd->format("H:i") ?>" disabled/>
          <span id="timeEnd-error" class="error"></span>
        </div>

        <button type="submit" class="col-md-7 form__btn-save mt-3">
          Voltar
        </button>
      </form>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Regex -->
    <script src="./scheduleVerify.js"></script>

    <!-- Script Delete -->
    <script src="./scheduleDelete.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


