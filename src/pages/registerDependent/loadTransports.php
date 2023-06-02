<?php 
  require_once '../../database/connection.php';
  
  $sql = "SELECT id, nome, sobrenome FROM ichild.Transportadores";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $transporteId = $row['id'];
        $transporteNome = $row['nome'];
        $transporteSobrenome = $row['sobrenome'];
        
        echo "<option value=\"$transporteId\">$transporteNome $transporteSobrenome</option>";
      }
    }
  }   
;?>


