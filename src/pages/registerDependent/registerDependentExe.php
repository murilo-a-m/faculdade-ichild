<?php
    header('Content-Type: application/json');
    session_start();    

    require_once '../../database/connection.php';

    $nome    = $_POST['nome'];	
    $sobrenome     = $_POST['sobrenome'];
    $dataNascimento     = $_POST['dataNascimento'];
    $documento     = $_POST['documento'];
    $turno     = $_POST['turno'];
    $responsavelId = $_SESSION['id'];
    $transportadorId = $_POST['transportadorId'];
    
    $sql = "SELECT id, nome, documento
    FROM ichild.Dependentes
    WHERE documento = '$documento'";

    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
          if ($row['documento'] == $documento) {
            $status = 'error';
            $message = 'Erro ao realizar a requisição';
            $statusCode = 403;

            http_response_code($statusCode);

            $response = array(
                'status' => $status,
                'message' => $message,
            );
            $jsonResponse = json_encode($response);
            echo $jsonResponse;
            exit;
          } 
        }
      }
    }

    $sql = "INSERT INTO Dependentes ( nome, sobrenome, dataNascimento, documento, turno, responsavelId, transportadorId) 
            VALUES ('$nome','$sobrenome', '$dataNascimento', '$documento','$turno','$responsavelId', '$transportadorId')";
            
    if ($result = mysqli_query($conn, $sql)) {
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
    mysqli_close($conn)
  ;?>
