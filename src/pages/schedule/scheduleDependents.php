<?php
  session_start();
  if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
    header('location: ../login/login.php?erro=true');
    exit;
  }
?>

<?php
  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn,"SET NAMES 'utf8'");
  mysqli_query($conn,'SET character_set_connection=utf8');
  mysqli_query($conn,'SET character_set_client=utf8');
  mysqli_query($conn,'SET character_set_results=utf8');
?>

<?php
  $responsavelId = 1;

  $sql = "SELECT id, nome FROM Dependentes WHERE responsavelId = $responsavelId";

  $resultado = mysqli_query($conn, $sql);

  if (mysqli_num_rows($resultado) > 0) {
      while ($row = mysqli_fetch_assoc($resultado)) {
          $dependenteId = $row['id'];
          $dependenteNome = $row['nome'];

          echo "<option value=\"$dependenteId\">$dependenteNome</option>";
      }
  }
?>
