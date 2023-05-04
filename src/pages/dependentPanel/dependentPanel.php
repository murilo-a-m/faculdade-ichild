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
    
        <!-- AOS link -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <body>
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
    <div class="dependenteTitulo">
        <h5 id="tittleDependentes">Dependentes</h5>
    </div>
    
    <div class="box">
        <div class="titulos">
            <h5 class="infoTitulos">Nome</h5>
            <h5 class="infoTitulos">Sobrenome</h5>
            <h5 class="infoTitulos">Data Nascimento</h5>
            <h5 class="infoTitulos">Documento</h5>
            <h5 class="infoTitulos">Turno</h5>
        </div>
        <?php require './dependentTable.php' ;?>
  <script src="../../utils/navbar.js"></script>
      

</body>

</html>