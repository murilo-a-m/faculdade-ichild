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
      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
        header('location: ../login/login.php?erro=true');
        exit;
      }
    ;?>
    
    <?php require '../../components/headerMenu.php';?>
      <?php
        $nome    = $_POST['nome'];	
        $sobrenome     = $_POST['sobrenome'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        
        $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

        if (!$conn) {
          die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
        }

        mysqli_query($conn,"SET NAMES 'utf8'");
        mysqli_query($conn,'SET character_set_connection=utf8');
        mysqli_query($conn,'SET character_set_client=utf8');
        mysqli_query($conn,'SET character_set_results=utf8');

        $responsavelId = $_SESSION['id'];

        $sql = "UPDATE ichild.Responsaveis
                SET nome = '$nome', sobrenome = '$sobrenome', cep = '$cep', estado = '$estado', cidade = '$cidade', rua = '$rua', numero = '$numero'  
                WHERE id = $responsavelId";  
      ;?>

      <?php
        if ($result = mysqli_query($conn, $sql)) {
          $_SESSION['nome'] = $nome;
          $_SESSION['sobrenome'] = $sobrenome;
          $_SESSION['cep'] = $cep;
          $_SESSION['estado'] = $estado;
          $_SESSION['cidade'] = $cidade;
          $_SESSION['rua'] = $rua;
          $_SESSION['numero'] = $numero;
          header('location: ./update.php?result=success');
        } else {
          header('location: ./update.php?result=error');
        }
        mysqli_close($conn);  
	  ?>
    <!-- Script Navbar -->
    <script src="../../utils/navbar-menu.js"></script>

    <!-- Script Info -->
    <script src="./update.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>