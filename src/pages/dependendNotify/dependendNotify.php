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
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

    <title>iChild</title>
  </head>

  <body>
    <?php 
      require_once '../../components/transportAuthorization.php';
      require_once '../../database/connection.php';
      require_once '../../components/headerTransportMenu.php';
    ;?>
    
    <main class="container__main-panel">
      
      <div id="panel" class="panel__content">
        <div class="panel_search mb-2">
          <p class="card__title">Notificações enviadas</p>
          <div class="search-content">
            <input type="search" class="form-control w-100" placeholder="Pesquisar" id="search">
            <button class="btn btn-style" id="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped text-center table__panel">
            <thead class="table-dark">
              <tr>
              <th scope="col"></th>
                <th scope="col">Dependente</th>
                <th scope="col">Responsavel</th>
                <th scope="col">Mensagem</th>
              </tr>
            </thead>
            <tbody>
              <?php require_once './dependenteNotifyTransportTable.php'; ?>
            </tbody>
          </table>
        </div>
  <body>   
    <script src="../../utils/navbar-transportMenu.js"></script>

    <script src="./dependentNotifyTransportSearch.js"></script>

    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../utils/navbar-menu.js"></script>
    <script src="./dependentPanel.js" ></script>
    <script src="../deleteDependent/deleteDependent.js"></script>
  </body>
</html>