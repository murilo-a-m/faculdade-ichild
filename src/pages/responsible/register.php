<!DOCTYPE html>
<html lang="pt-br">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>iChild</title>
  </head>
  <body>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
    <?php require '../../components/header.php';?>

    <main class="container__form container-fluid">
      <form id="form" class="container__form-content row g-1 container-md">
        <div class="col-md-6 mt-3">
          <label for="inputName" class="form-label">Nome</label>
          <input type="text" class="form-control" id="inputName" name="nome" required />
          <span id="name-error" class="error"></span>
        </div>
        <div class="col-md-6 mt-3">
          <label for="inputLastname" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="inputLastname" name="sobrenome" required />
          <span id="lastname-error" class="error"></span>
        </div>
        <div>
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
        <div class="col-md-6 mt-3">
          <label for="inputPassword" class="form-label">Senha</label>
          <input
            type="password"
            class="form-control"
            id="inputPassword"
            required
            name="password"
          />
          <span id="password-error" class="error"></span>
          <div class="require">
            A senha deve conter letras maiscúlas, letras minúsculas, números e
            caracteres especiais.
          </div>
        </div>
        <div class="col-md-6 mt-3">
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
        <div class="col-md-6 mt-3">
          <label for="inputCep" class="form-label">CEP</label>
          <input type="text" class="form-control" id="inputCep" required name="cep"  />
          <span id="cep-error" class="error"></span>
        </div>
        <div class="col-md-6 mt-3">
          <label for="inputState" class="form-label">Estado</label>
          <input type="text" class="form-control" id="inputState"  name="estado" />
          <span id="state-error" class="error"></span>
        </div>
        <div class="row g-2 col-12 mt-3">
          <div class="col-md-12 mt-3">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCity"  name="cidade" />
            <span id="city-error" class="error"></span>
          </div>
        </div>
        <div class="col-md-6 mt-3">
          <label for="inputStreet" class="form-label">Rua</label>
          <input type="text" class="form-control" id="inputStreet" required name="rua" />
          <span id="street-error" class="error"></span>
        </div>
        <div class="col-md-6 mt-3">
          <label for="inputNumber" class="form-label">Número</label>
          <input type="text" class="form-control" id="inputNumber" required name="numero" />
          <span id="number-error" class="error"></span>
        </div>
        <button type="submit" class="col-md-12 form__btn mt-3">
          Criar conta
        </button>
      </form>
    </main>

    <!-- Script Navbar -->
    <script src="../../utils/navbar.js"></script>

    <!-- Script Regex -->
    <script src="./register.js"></script>

    <!-- Script CEP -->
    <!-- <script src="../../utils/cep.js"></script> -->

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
  </body>
</html>
