<?php 
  require_once "../../database/connection.php";
  $transportadorId = $_SESSION['id'];

  $sql = "SELECT id, nome
          FROM ichild.Dependentes
          WHERE id =$transportadorId";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {

      echo '<div class="col-md-8 mt-2">';
      echo '<label for="inputTurn" class="form-label">Dependente</label>';
      echo '<select id="inputTurn" class="form-select" name="turno">';

      while ($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
      }

      echo '</select>';
      echo '<span id="turn-error" class="error"></span>';
      echo '</div>';
    }
  }   
;?>