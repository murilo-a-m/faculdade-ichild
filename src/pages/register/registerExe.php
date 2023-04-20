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

    <div>
  <div class="w3-code cssHigh notranslate w3-green w3-round-large">


	<?php
		$nome    = $_POST['nome'];	
		$sobrenome     = $_POST['sobrenome'];
		$email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];

		// Cria conexão
		$conn = mysqli_connect($servername, $username, $password, $database);

		// Verifica conexão
		if (!$conn) {
			die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
		}

		mysqli_query($conn,"SET NAMES 'utf8'");
		mysqli_query($conn,'SET character_set_connection=utf8');
		mysqli_query($conn,'SET character_set_client=utf8');
		mysqli_query($conn,'SET character_set_results=utf8');

    if ($nome == "" || $sobrenome == "" || $email == "" || $password == "" || $password2 == "" || $cep == "" || $estado == "" || $cidade == "" || $rua == "" || $numero == "") {
      echo "<p>&nbsp;Preencha todos os campos!</p>";
      exit;
    }

		$sql = "INSERT INTO Responsaveis (nome, sobrenome, email, password, cep, estado, cidade, rua, numero) VALUES ('$','$nome','$sobrenome','MD5($password)','$cep','$estado','$cidade','$rua','$numero')";

		?>
		<?php
		echo "<div>";
		if ($result = mysqli_query($conn, $sql)) {
			echo "<p>Cadastrado com sucesso! </p>";
		} else {
			echo "<p>&nbsp;Erro executando INSERT: " . mysqli_error($conn . "</p>");
		}
        echo "</div>";
		mysqli_close($conn); 
	?>
  </div>
  </body>
</html>
