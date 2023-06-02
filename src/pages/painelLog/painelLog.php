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

  <body>
    <?php 
      require '../../componentes/responsibleAuthorization.php';
      require '../../components/headerTransportMenu.php'
    ?>

    <div class="dependenteTitulo">
      <h5 class="tittleDependentes">Log do Dia</h5>
    </div>
    
    <div class="box">
        <div class="titulos">
          <h5 class="infoTitulos">Horário</h5>
          <h5 class="infoTitulos">Nome</h5>
          <h5 class="infoTitulos">Status</h5>
          <h5 class="infoTitulos">Local</h5>
        </div>
        <?php require './painelLogExe.php' ;?>
    </div>

    <!-- Navbar script -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Painel log Script -->
    <script src="./painelLog.js"></script>
  </body>
</html>