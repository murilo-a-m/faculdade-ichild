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
          <img src="../../img/favicon-ichild.png" alt="">
          <p>Seja bem vindo!</p>
          <p>Entre com seu email e senha caso já possua uma conta.</p>
        </div>
        <div class="login__content-form">
          <form class="col-md-8 form__login">
            <p class="login__title mb-3">Login</p>
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control p-2" />
              <label class="form-label custom-label" for="email">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control p-2" />
              <label class="form-label" for="form2Example2">Senha</label>
            </div>

            <button type="submit" class="login__btn btn-block mb-4">Entrar</button>

            <div class="text-center">
              <p>Não possui uma conta? <a href="#!">Registre-se</a></p>
            </div>
          </form>
        </div>
      </div>
    </main>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
    ></script>
  </body>
</html>
