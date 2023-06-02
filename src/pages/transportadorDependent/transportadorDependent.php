<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../../img/favicon-ichild.png"
      type="image/x-icon"
    />

    <!-- Css Links -->
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/reset.css" />

    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <!-- AOS link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <body>
    <?php 
      require_once '../../components/responsibleAuthorization.php';
      require_once '../../components/headerMenu.php';
    ?>
    
    <div class="dependenteTitulo">
      <p class="tittleDependentes">Dependentes</p>
    </div>
    
    <div class="boxTransportador">
      <div class="titulos">
        <h5 class="infoTitulos">Nome</h5>
        <h5 class="infoTitulos">Escola</h5>
        <h5 class="infoTitulos">Local</h5>
        <h5 class="infoTitulos">Responsavel</h5>
        <h5 class="infoTitulos">Turno</h5>
      </div>
    <?php require './transportadorDependentExe.php' ;?>
    <script src="../../utils/navbar-menu.js"></script>
    <script src="./dependentPanel.js" ></script>
    <script src="../deleteDependent/deleteDependent.js"></script>
  </body>
</html>