<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/reset.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="shortcut icon" href="../../img/favicon-ichild.png" type="image/x-icon"/>
    <title>Login</title>
  </head>
  <body>
    <?php require '../../components/header.php';?>
    <div class="fundo">
        <div class="box">
            <div class="inputCadastro">
              <img id="iconichild" src="../../img/about-logo.png" alt="">
              <form id="form">
                <div class="inputbox">
                  <input id="email" type="text" name="email">
                  <span>Email</span>
                </div>
                <div class="inputbox">
                  <input id="password" type="password" name="senha">
                  <span>Password</span>                      
                </div>
                <button type="submit" class="bn632-hover bn20">Bem-Vindo</button>
              </form>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
    <script src="../../utils/navbar.js"></script>
    <script src="./login.js"></script>
</body>
</html>
