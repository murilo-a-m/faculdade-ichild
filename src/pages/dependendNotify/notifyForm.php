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
        session_start();
        require_once '../../database/connection.php';
        require '../../components/headerTransportMenu.php';
    ?>

    <main class="container__form-transport container-fluid">
        <form
        class="container__form-content row g-1 container-md gap-2"
        id="form-log"
        method ='post'
        action='dependendNotifyExe.php'
        >
            <p class="col-md-7 container__form-text">Enviar Notificação:</p>
            <div class="col-md-7 mt-2">
                <label  class="form-label">Dependente</label>
                <select  class="form-select" name="dependenteNotify">
                    <?php require_once './loadDependentNotify.php'; ?>
                </select>
            </div>
            <div class="col-md-7 mt-2">
                <label for="inputMessage" class="form-label">Mensagem</label>
                <input class="form-control" name="messageNot" required/>
                <span id="document-error" class="error"></span>
            </div>

            <button type="submit" class="info__btn-editTransport col-md-5 form__btn-save">
            Enviar
            </button>
            <a href="../transportMenu/transportMenu.php" class="info__btn-editTransport col-md-2 form__btn-cancel">Cancelar</a>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

    <!-- Script Navbar -->
    <script src="../../utils/navbar-transportMenu.js"></script>

    <!-- Script criarLog -->
    <script src="./criarLog.js"></script>

    <!-- Script Bootstrap -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"
    ></script>
    </body>
</html>
