<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="/src/img/favicon-ichild.png"
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
      href="./img/favicon-ichild.png"
      type="image/x-icon"
    />

    <title>iChild</title>
  </head>
  <body>
    <?php require_once '../../components/header.php';?>

    <main class="container__form-register container-fluid">
      <form id="form" class="container__form-content row g-1 container-md mt-3">

        <div class="col-md-10 passwordContent">
          <div class="col-md-6">
            <label for="inputName" class="form-label">Nome</label>
            <input type="text" class="form-control" id="inputName" name="nome" required />
            <span id="name-error" class="error"></span>
          </div>

          <div class="col-md-6">
            <label for="inputLastname" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="inputLastname" name="sobrenome" required />
            <span id="lastname-error" class="error"></span>
          </div>
        </div>

        <div class="col-md-10">
          <label for="inputEmail" class="form-label mt-3">Email</label>
          <input
            type="email"
            class="form-control"
            id="inputEmail"
            required
            placeholder="user@email.com"
            name="email"
          />
          <span id="email-error" class="error"></span>
        </div>

        <div class="col-md-10 passwordContent mt-3">
          <div class="col-md-6">
            <label for="inputPassword" class="form-label">Senha</label>
            <input
              type="password"
              class="form-control"
              id="inputPassword"
              required
              name="password"
            />
            <span id="password-error" class="error"></span>
            <p class="require">
              A senha deve conter letras maiscúlas, letras minúsculas, números e
              caracteres especiais.
            </p>
          </div>

          <div class="col-md-6">
            <label for="inputConfirmPassword" class="form-label"
              >Confirmar senha</label
            >
            <input
              type="password"
              class="form-control"
              id="inputConfirmPassword"
              required
              name="password2"
            />
            <span id="confirmPassword-error" class="error"></span>
          </div>
        </div>

        <div class="col-md-10 passwordContent">
          <div class="col-md-6 mt-3">
            <label for="inputCnh" class="form-label">CNH</label>
            <input type="text" class="form-control" id="inputCnh" required name="cnh"  />
            <span id="cnh-error" class="error"></span>
          </div>
          <div class="col-md-6 mt-3">
            <label for="inputCep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="inputCep" required name="cep"  />
            <span id="cep-error" class="error"></span>
          </div>
        </div>

        <div class="col-md-10 passwordContent">
          <div class="col-md-6 mt-3">
            <label for="inputPlaca" class="form-label">Placa</label>
            <input type="text" class="form-control" id="inputPlaca" required name="placa" />
            <span id="street-error" class="error"></span>
          </div>
          <div class="col-md-6 mt-3">
            <label for="inputMarca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="inputMarca" required name="marca" />
            <span id="marca-error" class="error"></span>
          </div>
        </div>

        <div class="col-md-10 passwordContent">
          <div class="col-md-6 mt-3">
            <label for="inputModelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="inputModelo" required name="modelo" />
            <span id="modelo-error" class="error"></span>
          </div>
          <div class="col-md-6 mt-3">
            <label for="inputNumber" class="form-label">Capacidade</label>
            <input type="text" class="form-control" id="inputCapacidade" required name="capacidade" />
            <span id="capacidade-error" class="error"></span>
          </div>
        </div>

        <button type="submit" class="col-md-10 form__btn mt-3">
          Cadastrar veiculo
        </button>
      </form>
    </main>

    <!-- Script Jquery -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

    <!-- Script SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Script Navbar -->
    <script src="../../utils/navbar.js"></script>

    <!-- Script Regex -->
    <script src="./registerTransport.js"></script>
    <script src="./cepTransport.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
