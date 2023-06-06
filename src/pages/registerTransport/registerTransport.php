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
    <main class="container__register-transport background__style">
      <div class="container__register-content">
        <div class="login__content-backgroud">
          <a href="../home/home.php"><img class="img-fluid" src="../../img/favicon-ichild-transporte.png" alt=""></a>
          <p>Seja bem vindo!</p>
          <p>Se cadastre e registre seu veículo agora mesmo.</p>
          <div class="input-group mt-3">
            <a href="../../pages/loginTransport/loginTransport.php"><button type="submit" class="bn632-transport bn20"> <i class="bi bi-person-check-fill"></i> Fazer login</button></a>
            <a href="../../pages/home/home.php"><button type="submit" class="bn632-transport bn20"><i class="bi bi-house-door-fill"></i> Home</button></a>
          </div>
        </div>

        <div class="login__content-form">
          <form class="col-md-10 form__login" id="form">
            <a href="../home/home.php"><img class="img-fluid img__responsive" src="../../img/favicon-ichild-transporte.png" alt=""></a>
            <p class="login__title mb-3">Crie sua conta</p>
            
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputName" class="form-control form-control-lg" name="nome" required/>
                  <label class="form-label" for="inputName">Nome</label>
                </div>
                <span id="name-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputLastname" class="form-control form-control-lg" name="sobrenome" required/>
                  <label class="form-label" for="inputLastname">Sobrenome</label>
                </div>
                <span id="lastname-error" class="error"></span>
              </div>

              <div class="col-md-12 mb-4">
                <div class="form-outline">
                  <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="user@email.com" name="email" required/>
                  <label class="form-label" for="inputEmail">Email</label>
                </div>
                <span id="email-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" id="inputPassword" class="form-control form-control-lg" name="password" required/>
                  <label class="form-label" for="inputPassword">Senha</label>
                </div>
                <span id="password-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" id="inputConfirmPassword" class="form-control form-control-lg" name="password2" required/>
                  <label class="form-label" for="inputConfirmPassword">Confirmar senha</label>
                </div>
                <span id="confirmPassword-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputCnh" class="form-control form-control-lg" name="cnh" required/>
                  <label class="form-label" for="inputCnh">CNH</label>
                </div>
                <span id="cnh-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputCep" class="form-control form-control-lg" name="cep" required/>
                  <label class="form-label" for="inputCep">CEP</label>
                </div>
                <span id="cep-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputPlaca" class="form-control form-control-lg" name="placa" required/>
                  <label class="form-label" for="inputPlaca">Placa</label>
                </div>
                <span id="placa-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputMarca" class="form-control form-control-lg" name="marca" required/>
                  <label class="form-label" for="inputMarca">Marca</label>
                </div>
                <span id="marca-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputModelo" class="form-control form-control-lg" name="modelo" required/>
                  <label class="form-label" for="inputModelo">Modelo</label>
                </div>
                <span id="modelo-error" class="error"></span>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="inputCapacidade" class="form-control form-control-lg" name="capacidade" required/>
                  <label class="form-label" for="inputCapacidade">Capacidade</label>
                </div>
                <span id="capacidade-error" class="error"></span>
              </div>
            </div>

            <button type="submit" class="bn632-transport bn20">Criar conta</button>

            <div class="text-center dontHaveAccount">
              <p>Já possui uma conta? <a href="../loginTransport/loginTransport.php">Faça seu login</a></p>
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

    <!-- Script Regex -->
    <script src="./registerTransport.js"></script>

    <!-- Script CEP -->
    <script src="../../utils/cep.js"></script>
  </body>
</html>
