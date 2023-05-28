<?php
  session_start();
  require_once '../../database/connection.php';
  header('Content-Type: application/json');

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

          if (isset($foto_base64)){
            $_SESSION['foto'] = $foto_base64;
          }
          
          $status = 'success';
          $message = 'Requisição bem sucedida';
          $statusCode = 200;

          http_response_code($statusCode);

          $response = array(
              'status' => $status,
              'message' => $message,
          );
          $jsonResponse = json_encode($response);
          echo $jsonResponse;
          exit;

      } else {
          $status = 'error';
          $message = 'Erro ao realizar a requisição';
          $statusCode = 500;

          http_response_code($statusCode);

          $response = array(
              'status' => $status,
              'message' => $message,
          );
          $jsonResponse = json_encode($response);
          echo $jsonResponse;
          exit;
      }
  $conn->close();
}
?>
