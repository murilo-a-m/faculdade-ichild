<?php
  require_once '../../components/responsibleAuthorization.php';
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
  $responsavelId = $_SESSION['id'];

  $sql = "SELECT id, nome, sobrenome FROM Dependentes WHERE responsavelId = $responsavelId";

  $resultado = mysqli_query($conn, $sql);

  if (mysqli_num_rows($resultado) > 0) {
      while ($row = mysqli_fetch_assoc($resultado)) {
          $dependenteId = $row['id'];
          $dependenteNome = $row['nome'];
          $dependenteSobrenome = $row['sobrenome'];

          echo "<option value=\"$dependenteId\">$dependenteNome $dependenteSobrenome</option>";
      }
  }
?>
