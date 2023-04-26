<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/reset.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="shortcut icon" href="../../img/favicon-ichild.png" type="image/x-icon"
    
    />
    <title>Login</title>
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
      if (isset($_GET['status'])){
        echo 
        "<script>
           Swal.fire('Tudo pronto, conta cadastrada!')
        </script>";
      }
    ;?>

    <header id="home" class="container__header">
      <div class="container__header-content container-fluid">
        <div class="header__logo">
          <a href="../index.html">
            <img
              src="../../img/logo-ichild.png"
              alt="Logo do iChild"
              class="header__image"
              width="130px"
            />
          </a>
        </div>
        <div class="header__nav">
          <ul class="navbar">
            <li><a href="../index.html#home" class="active">Home</a></li>
            <li><a href="../index.html#about">Quem somos</a></li>
            <li><a href="../index.html#services">Serviços</a></li>
            <li><a href="../index.html#contact">Contato</a></li>
          </ul>
        </div>
        <div class="header__button">
          <a href="#" class="header__btn">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              fill="currentColor"
              class="bi bi-person-fill header__button-icon"
              viewBox="0 0 16 16"
            >
              <path
                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
              />
            </svg>
            <span>Minha conta</span>
          </a>
          <div id="nav-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-list"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
              />
            </svg>
          </div>
        </div>
      </div>
    </header>
    <div class="fundo">
        <div class="box">
            <div class="inputCadastro">
              <img id="iconichild" src="../../img/about-logo.png" alt="">

              <form method="post" action="loginExe.php" >
                <div class="inputbox">
                  <input type="text" required="required" name="email">
                  <span>Email</span>
                </div>
                <div class="inputbox">
                  <input type="password" required="required" name="senha">
                  <span>Password</span>                      
                </div>
                <button type="submit" class="bn632-hover bn20">Bem-Vindo</button>
              </form>
            </div>
        </div>
      </div>
    </div>
    <script>"/src/JS/navbar.js"</script>  
</body>
</html>
