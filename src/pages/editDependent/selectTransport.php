<?php 
  require_once "../../database/connection.php";
  $transportadorId = $_SESSION['id'];

  $sql = "SELECT id, nome, sobrenome
          FROM ichild.Transportadores;";

  if ($result = mysqli_query($conn, $sql)) {

    echo '<div class="col-md-8 mt-2">';
    echo '<label for="inputTransport" class="form-label">Transporte</label>';
    echo '<select id="inputTransport" class="form-select" name="transportadorId" >';

    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){
        echo '<option value="' . $row['id'] . '">' . $row['nome'] . ' ' . $row['sobrenome'] . '</option>';
      }
    }
    
    echo '</select>';
    echo '<span id="transport-error" class="error"></span>';
    echo '</div>';
  }   
?>