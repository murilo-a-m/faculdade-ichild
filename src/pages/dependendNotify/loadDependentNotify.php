<?php 
  require_once "../../database/connection.php";
  $transportadorId = $_SESSION['id'];

  $sql = "SELECT id, nome, sobrenome
          FROM ichild.Dependentes
          WHERE transportadorId = $transportadorId";
  

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        echo '<option value="' . $row['id'] . '">' . $row['nome'] . ' ' . $row['sobrenome'] . '</option>';
      }
    }
  }     
?>