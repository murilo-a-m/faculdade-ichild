<?php
  $nome    = $_POST['nome'];	
  $sobrenome     = $_POST['sobrenome'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $cnh = $_POST['cnh'];
  $cep = $_POST['cep'];
  $placa = $_POST['placa'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $capacidade = $_POST['capacidade'];

  $encrypted_pwd = md5($password);

  $sql = "SELECT id, nome, sobrenome, email, senha, cnh, cep, placa, marca, modelo, capacidade
  FROM ichild.Transportadores
  WHERE email = '$email'";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        if ($row['email'] == $email) {
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

  $sql = "INSERT INTO ichild.Transportades ( nome, sobrenome, email, senha, cnh, cep, placa, marca, modelo, capacidade) 
          VALUES ('$nome','$sobrenome', '$email', '$encrypted_pwd', '$cnh', '$cep', '$placa','$marca','$modelo','$capacidade')";
  
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
  mysqli_close($conn);
;?>
