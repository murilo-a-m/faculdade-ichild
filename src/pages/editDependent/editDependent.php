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
      require_once '../../components/responsibleAuthorization.php'; 
      require_once '../../database/connection.php';
      require_once './loadDependent.php';
      require_once '../../components/headerMenu.php';
    ;?>

    <main class="container__form container-fluid">
      <form
        class="container__form-content row g-1 container-md gap-2"
        id="form-dependent"
      >
        <p class="col-md-8 container__form-text">Registrar dependente:</p>

        <div class="col-md-8 mt-2">
          <label for="inputName" class="form-label">Nome</label>
          <input class="form-control" value="<?php echo ($nome);?>"id="inputName" name="nome" />
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
          <input class="form-control" value="<?php echo ($documento);?>" id="inputDocument" name="documento"/>
          <span id="document-error" class="error"></span>
        </div>

        <div class="col-md-8 mt-2">
          <label for="inputTurn" class="form-label">Turno</label>
          <select id="inputTurn" class="form-select" name="turno">
            <option <?php if ($turno == 'Matutino') echo 'selected'; ?> value="Matutino">Matutino</option>
            <option <?php if ($turno == 'Vespertino') echo 'selected'; ?> value="Vespertino">Vespertino</option>
            <option <?php if ($turno == 'Noturno') echo 'selected'; ?> value="Noturno">Noturno</option>
            <option <?php if ($turno == 'Integral') echo 'selected'; ?> value="Integral">Integral</option>
          </select>
          <span id="turn-error" class="error"></span>
        </div>

        <?php require_once './selectTransport.php' ?>
        <button type ="submit" name="update" id="update" class="col-md-6 form__btn-save">
          Editar dependente
        </button>
        <a href="../responsibleMenu/responsibleMenu.php" class="col-md-2 form__btn-cancel">Cancelar</a>
      </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

    <script src="../../utils/navbar-menu.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <script src="./editDependent.js"></script>

  </body>
</html>
