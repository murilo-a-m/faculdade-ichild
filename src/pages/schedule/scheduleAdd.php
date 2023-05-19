<?php 
  session_start();
  if (!isset($_SESSION['id']) || $_SESSION['role'] != 'responsavel') {
    header('location: ../login/login.php?erro=true');
    exit;
  }

  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');
  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn, "SET NAMES 'utf8'");
  mysqli_query($conn, 'SET character_set_connection=utf8');
  mysqli_query($conn, 'SET character_set_client=utf8');
  mysqli_query($conn, 'SET character_set_results=utf8')
?>

<?php
  $date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));
  var_dump($date);
?>

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
    <?php require '../../components/headerMenu.php';?>

    <main class="container__form container-fluid">
      <form
        class="container__form-schedule row g-1 container-md gap-2"
        id="formAdd"
        name="formAdd"
        method="post"
        action="scheduleAddExe.php"
        >
        <p class="col-md-8 container__form-text">Registrar dependente:</p>

        <div class="col-md-8 mt-2">
          <!-- <label for="inputName" class="form-label">Nome</label> -->
          <input class="form-control" type="date" id="date" name="date" value="<?php echo $date->formar("Y-m-d") ?>"/>
          <!-- <span id="name-error" class="error"></span> -->
          <input class="form-control" type="time" id="time" name="time" value="<?php echo $date->formar("H:i") ?>"/>
        </div>

        <button type="submit" class="col-md-6 form__btn-save">
          Salvar dependente
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
