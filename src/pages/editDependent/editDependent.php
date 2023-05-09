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
    ;?>

    <?php 
      if (isset($_GET['result'])){
        
        if ($_GET['result'] == 'success'){
          echo 
          "<script>
          Swal.fire(
            'Atualizado!',
            'Usuário editado com sucesso!',
            'success'
          ).then(function() {
            window.location = './update.php'
          })
        </script>";
        }

        if ($_GET['result'] == 'error'){
          echo 
          "<script>
              Swal.fire('Erro ao atualizar!')
          </script>";
        }
      }
    ;?>

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

      $responsavelId = $_SESSION['id'];

      $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno, 
              FROM ichild.Dependentes
              WHERE id =$responsavelId";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            $nome = $row['nome'];
            $sobrenome = $row['sobrenome'];
            $dataNascimento = $row['dataNascimento'];
            $documento = $row['documento'];
            $turno = $row['turno'];
          }
        }
      }   
    ;?>

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
          <input class="form-control" value="<?php echo ($nome);?> id="inputName" name="nome" />
          <span id="name-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputLastName" class="form-label">Sobrenome</label>
          <input class="form-control" value="<?php echo ($sobrenome);?>" id="inputLastName" name="sobrenome" />
          <span id="lastName-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputBirth" class="form-label">Data de nascimento</label>
          <input type="date" value="<?php echo ($dataNascimento);?>" class="form-control" id="inputBirth" name="dataNascimento"/>
          <span id="birth-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputDocument" class="form-label">Documento</label>
          <input class="form-control" <?php echo ($documento);?> id="inputDocument" name="documento"/>
          <span id="document-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputTurn" class="form-label">Turno</label>
          <select value='<?php echo ($turno);?>'id="inputTurn" class="form-select" name="turno">
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
