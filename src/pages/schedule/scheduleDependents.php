<?php
  require_once '../../components/responsibleAuthorization.php';
  require_once '../../database/connection.php';
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
