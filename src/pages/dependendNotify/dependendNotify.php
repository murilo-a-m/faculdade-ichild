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
      require_once '../../components/transportAuthorization.php';
      require '../../components/headerMenu.php';
    ?>
    
    <div class="box">
      <div class="titulos">
        <h1 class="tituloNotify">Notificação</h1>
    </div>
    <div class="notifyBox">
      <div  class='dadosNoti'>
        <div class='notificationsBall'></div>
        <h6 class='notify'>mensagens</h6>
      </div>
      <?php 
        require './dependentMsg.php';
      ?>
    </div>
    
    <!-- <?php require './dependendNotifyExe.php' ;?> -->

    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../utils/navbar-menu.js"></script>
    <script src="./dependentPanel.js" ></script>
    <script src="../deleteDependent/deleteDependent.js"></script>
  </body>
</html>