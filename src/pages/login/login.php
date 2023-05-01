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
    <?php require '../../components/header.php';?>
    
    <?php
      if (isset($_GET['error'])){
        if ($_GET['error'] == 'loginError'){
        echo 
        "<script>
          Swal.fire(
            'Conta não cadastrada!',
            'Tente novamente ou crie uma nova conta!',
            'error'
          ).then(function() {
            window.location = './login.php'
          })
        </script>";
        }
      }
    ;?>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
