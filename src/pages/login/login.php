<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css Links -->
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/reset.css" />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />

    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
      rel="stylesheet"
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
    <main class="container__login background__style">
      <div class="container__login-content">
        <div class="login__content-backgroud">
          <a href="../home/home.php"><img class="img-fluid" src="../../img/favicon-ichild.png" alt=""></a>
          <p>Seja bem vindo!</p>
          <p>Entre com seu email e senha caso já possua uma conta.</p>
          <div class="input-group mt-3">
            <a href="../../pages/responsible/register.php"><button type="submit" class="bn632-hover bn20"><i class="bi bi-person-fill-add"></i> Criar conta</button></a>
            <a href="../../pages/home/home.php"><button type="submit" class="bn632-hover bn20"><i class="bi bi-house-door-fill"></i> Home</button></a>
          </div>
        </div>

        <div class="login__content-form">
          <form class="col-md-8 form__login" id="form">
            <a href="../home/home.php"><img class="img-fluid img__responsive" src="../../img/favicon-ichild.png" alt=""></a>
            <p class="login__title mb-3">Login</p>
            
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control p-2" />
              <label class="form-label custom-label" for="email">Email</label>
            </div>

            <div class="d-flex form-outline mb-4">
                <input type="password" id="senha" name="senha" class="form-control p-2" />
                <button id="showPassword" class="btn btn-link" data-mdb-ripple-color="dark" type="button" id="mostrarSenha">
                  <i id="eye" class="bi bi-eye-fill"></i>
                </button>
                <label class="form-label" for="senha">Senha</label>
            </div>

            <button type="submit" class="bn632-hover bn20">Entrar</button>

            <div class="text-center haveAccount">
              <p>Não possui uma conta? <a href="../responsible/register.php">Registre-se</a></p>
            </div>
          </form>
        </div>
      </div>
    </main>

    <!-- Jquery -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
    ></script>

    <!-- Login -->
    <script src="./login.js"></script>
  </body>
</html>
