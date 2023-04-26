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

    <?php 
      session_start();
      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
        header('location: ../login/login.php?erro=true');
        exit;
      }
    ;?>

    <?php

      $nome    = $_POST['nome'];	
      $sobrenome     = $_POST['sobrenome'];
      $dataNascimento     = $_POST['dataNascimento'];
      $documento     = $_POST['documento'];
      $turno     = $_POST['turno'];
      $responsavelId = $_SESSION['id'];
      
      $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

      if (!$conn) {
        die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
      }

      mysqli_query($conn,"SET NAMES 'utf8'");
      mysqli_query($conn,'SET character_set_connection=utf8');
      mysqli_query($conn,'SET character_set_client=utf8');
      mysqli_query($conn,'SET character_set_results=utf8');

      $sql = "SELECT id, nome, documento
      FROM ichild.Dependentes
      WHERE documento = '$documento'";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            if ($row['documento'] == $documento) {
              header('location: ./registerDependent.php?erro=documentExists');
              exit;
            } 
          }
        }
      }

      $sql = "INSERT INTO Dependentes ( nome, sobrenome, dataNascimento, documento, turno, responsavelId) 
              VALUES ('$nome','$sobrenome', '$dataNascimento', '$documento','$turno','$responsavelId')";?>

      <?php
        echo "<div>";
        if ($result = mysqli_query($conn, $sql)) {
          header('location: ../responsibleMenu/responsibleMenu.php');
        } else {
          echo "<p>&nbsp;Erro executando INSERT: " . mysqli_error($conn . "</p>");
        }
            echo "</div>";
        mysqli_close($conn);  
	    ?>

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

