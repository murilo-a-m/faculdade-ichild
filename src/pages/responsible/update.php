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

      $sql = "SELECT id, nome, sobrenome, cep, estado, cidade, rua, numero 
              FROM ichild.Responsaveis
              WHERE id =$responsavelId";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            $nome = $row['nome'];
            $sobrenome = $row['sobrenome'];
            $cep = $row['cep'];
            $estado = $row['estado'];
            $cidade = $row['cidade'];
            $rua = $row['rua'];
            $numero = $row['numero'];
          }
        }
      }   
    ;?>

    <main class="container__main-reponsibleInfo">
    <form class="container__responsibleInfo-content row g-1 container-md gap-2" method="post" action="updateExe.php">
        <p class="col-md-7 container__form-text">Suas informações:</p>

        <div class="col-md-7 mt-3">
          <label for="infoName" class="form-label">Nome</label>
          <input type="text" value="<?php echo ($nome);?>" class="form-control disabled" id="infoName" name="nome" disabled/>
          <span id="name-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoLastname" class="form-label">Sobrenome</label>
          <input type="text" value="<?php echo ($sobrenome);?>" class="form-control disabled" id="infoLastname" name="sobrenome" required disabled/>
          <span id="lastname-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoCep" class="form-label">CEP</label>
          <input type="text" value="<?php echo ($cep);?>" class="form-control disabled" id="infoCep" required name="cep" disabled />
          <span id="cep-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoState" class="form-label">Estado</label>
          <input type="text" value="<?php echo ($estado);?>" class="form-control disabled" id="infoState"  name="estado" disabled/>
          <span id="state-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoCity" class="form-label">Cidade</label>
          <input type="text" value="<?php echo ($cidade);?>" class="form-control disabled" id="infoCity"  name="cidade" disabled/>
          <span id="city-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoStreet" class="form-label">Rua</label>
          <input type="text" value="<?php echo ($rua);?>" class="form-control disabled" id="infoStreet" required name="rua" disabled/>
          <span id="street-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoNumber" class="form-label">Número</label>
          <input type="text" value="<?php echo ($numero);?>" class="form-control disabled" id="infoNumber" required name="numero" disabled/>
          <span id="number-error" class="error"></span>
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
    <script src="./update.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>