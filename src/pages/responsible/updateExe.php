<?php
  session_start();
  require_once "../../database/connection.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome    = $_POST['nome'];	
      $sobrenome     = $_POST['sobrenome'];
      $cep = $_POST['cep'];
      $estado = $_POST['estado'];
      $cidade = $_POST['cidade'];
      $rua = $_POST['rua'];
      $numero = $_POST['numero'];

      $responsavelId = $_SESSION['id'];

      if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
          $foto = $_FILES["foto"]["tmp_name"];
          $foto_base64 = base64_encode(file_get_contents($foto));
        
          $sql = "UPDATE ichild.Responsaveis
            SET nome = '$nome', sobrenome = '$sobrenome', cep = '$cep', estado = '$estado', cidade = '$cidade', rua = '$rua', numero = '$numero', imagem = '$foto_base64'  
            WHERE id = $responsavelId";  

      } else {
          $sql = "UPDATE ichild.Responsaveis
            SET nome = '$nome', sobrenome = '$sobrenome', cep = '$cep', estado = '$estado', cidade = '$cidade', rua = '$rua', numero = '$numero' 
            WHERE id = $responsavelId";  
      }
      
      if ($conn->query($sql) === TRUE) {
          $_SESSION['nome'] = $nome;
          $_SESSION['sobrenome'] = $sobrenome;
          $_SESSION['cep'] = $cep;
          $_SESSION['estado'] = $estado;
          $_SESSION['cidade'] = $cidade;
          $_SESSION['rua'] = $rua;
          $_SESSION['numero'] = $numero;
          $_SESSION['foto'] = $foto_base64;

      } else {
          echo "Erro ao salvar os dados: " . $conn->error;
      }
  $conn->close();
}
?>
