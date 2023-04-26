
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
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/reset.css" />

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

    <!-- AOS link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <title>iChild</title>
  </head>
  <body>
    <?php require '../../database/connection.php'; ?>    
    
    <?php
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      echo "<script>console.log('Esta chamando');</script>";

      // Cria conexão
      $conn = mysqli_connect($servername, 'dev', 'dev', 'ichild');

      // Verifica conexão
      if (!$conn) {
        die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
      }

      mysqli_query($conn,"SET NAMES 'utf8'");
      mysqli_query($conn,'SET character_set_connection=utf8');
      mysqli_query($conn,'SET character_set_client=utf8');
      mysqli_query($conn,'SET character_set_results=utf8');


      $sql = "SELECT id, nome, sobrenome, email, senha, cep, estado, cidade, rua, numero 
      FROM ichild.Responsaveis
      WHERE email = 'muriloam@outlook.com'";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            if ($row['email'] == $email &&$row['senha'] ==  MD5($senha)) {
              echo "<script> location.href='../responsibleMenu/responsibleMenu.php'; </script>";
            } else {
              echo "<script>alert('Erro ao realizar login');</script>";
              echo "<script> location.href='./login.php'; </script>";
            }
          }
        }
      }
    
    ;?>
    <?php
      mysqli_close($conn);  
	?>

  </div>
  </body>
</html>

