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
          <p class="card__title">Mensagens</p>
        </div>
        <div class="table-responsive">
          <table class="table table-striped text-center table__panel">
            <thead class="table-dark">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Transportador</th>
                <th scope="col">Mensagem</th>
              
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </main>
    
    <script src="../../utils/navbar-transportMenu.js"></script>

    <script src="./transportDependentSearch.js"></script>
  </body>
</html>