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


