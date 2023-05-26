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

    <script src="sweetalert2.all.min.js"></script>

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
      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'transportador'  ){
        header('location: ../loginTransport/loginTransport.php?erro=true');
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
            window.location = './updateTransport.php'
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

    <?php require '../../components/headerTransportMenu.php';?>

    <?php 
      $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

      if (!$conn) {
        die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
      }

      mysqli_query($conn,"SET NAMES 'utf8'");
      mysqli_query($conn,'SET character_set_connection=utf8');
      mysqli_query($conn,'SET character_set_client=utf8');
      mysqli_query($conn,'SET character_set_results=utf8');

      $transportadorId = $_SESSION['id'];
      session_write_close();

      $sql = "SELECT id, nome, sobrenome, cnh, cep, placa, marca, modelo, capacidade 
              FROM ichild.Transportadores
              WHERE id = $transportadorId";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            $nome = $row['nome'];
            $sobrenome = $row['sobrenome'];
            $cnh = $row['cnh'];
            $cep = $row['cep'];
            $placa = $row['placa'];
            $marca = $row['marca'];
            $modelo = $row['modelo'];
            $capacidade = $row['capacidade'];
          }
        }
      }   
    ;?>

    <main class="container__main-reponsibleInfo container-fluid">
      <form id="formUpdate" class="container__responsibleInfo-content row g-1 container-md gap-2" method="post" action="updateTransportExe.php">
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
          <label for="infoCnh" class="form-label">CNH</label>
          <input type="text" value="<?php echo ($cnh);?>" class="form-control disabled" id="infoCnh" required name="cnh" disabled />
          <span id="cnh-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoCep" class="form-label">CEP</label>
          <input type="text" value="<?php echo ($cep);?>" class="form-control disabled" id="infoCep" required name="cep" disabled />
          <span id="cep-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoPlaca" class="form-label">Placa</label>
          <input type="text" value="<?php echo ($placa);?>" class="form-control disabled" id="infoPlaca"  name="placa" disabled/>
          <span id="placa-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoMarca" class="form-label">Marca</label>
          <input type="text" value="<?php echo ($marca);?>" class="form-control disabled" id="infoMarca"  name="marca" disabled/>
          <span id="marca-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoModelo" class="form-label">Modelo</label>
          <input type="text" value="<?php echo ($modelo);?>" class="form-control disabled" id="infoModelo"  name="modelo" disabled/>
          <span id="modelo-error" class="error"></span>
        </div>

        <div class="col-md-7 mt-3">
          <label for="infoCapacidade" class="form-label">Capacidade</label>
          <input type="text" value="<?php echo ($capacidade);?>" class="form-control disabled" id="infoCapacidade" required name="capacidade" disabled/>
          <span id="capacidade-error" class="error"></span>
        </div>

        <button id="btnEdit" class="col-md-7 info__btn-edit">
          Editar informações
        </button>

        <button id="btnSave" class="col-md-5 info__btn-edit form-disabled">
          Salvar
        </button>

        <button id="btnCancel" class="col-md-2 info__btn-edit form-disabled">
          Cancelar
        </button>
      </form>

      <form id="delete__form" method="post" action="deleteExe.php" class="container__responsibleInfo-content row g-1 container-md gap-2 mt-1">
        <input type="hidden" name="id_cliente" value="1">
        <button type="button" id="btnDelete" class="info__btn-edit col-md-7">
        Deletar conta
        </button>
      </form>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Info -->
    <script src="./updateTransport.js"></script>

    <!-- Script Delete -->
    <script src="./delete.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>