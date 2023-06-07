<?php
    session_start();    
    require_once '../../database/connection.php';
    header('Content-Type: application/json');

    $nome    = $_POST['nome'];	
    $sobrenome     = $_POST['sobrenome'];
    $dataNascimento     = $_POST['dataNascimento'];
    $documento     = $_POST['documento'];
    $turno     = $_POST['turno'];
    $responsavelId = $_SESSION['id'];
    $transportadorId = $_POST['transportadorId'];
    $time_ = $_POST['time'];
    
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

    $sql = "INSERT INTO Dependentes ( nome, sobrenome, dataNascimento, documento, turno, responsavelId, transportadorId, time) 
            VALUES ('$nome','$sobrenome', '$dataNascimento', '$documento','$turno','$responsavelId', '$transportadorId', '$time_')";
            
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
      // Retorna erro do banco 
      $message = mysqli_error($conn);
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
