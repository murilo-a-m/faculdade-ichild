<?php 
      session_start();
      if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'transportador'  ){
        header('location: ../loginTransport/loginTransport.php?erro=true');
        exit;
      }
    ;?>

  <?php
    $nome    = $_POST['nome'];	
    $sobrenome     = $_POST['sobrenome'];
    $cnh = $_POST['cnh'];
    $cep = $_POST['cep'];
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $capacidade = $_POST['capacidade'];
    
    $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

    if (!$conn) {
      die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
    }

    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,'SET character_set_connection=utf8');
    mysqli_query($conn,'SET character_set_client=utf8');
    mysqli_query($conn,'SET character_set_results=utf8');

    $transportadorId = $_SESSION['id'];

    $sql = "UPDATE ichild.Transportadores
            SET nome = '$nome', sobrenome = '$sobrenome', cnh = '$cnh', cep = '$cep', placa = '$placa', marca = '$marca', modelo = '$modelo', capacidade = '$capacidade'  
            WHERE id = $transportadorId";  
  ;?>

  <?php
    if ($result = mysqli_query($conn, $sql)) {
      $_SESSION['nome'] = $nome;
      $_SESSION['sobrenome'] = $sobrenome;
      $_SESSION['cnh'] = $cnh;
      $_SESSION['cep'] = $cep;
      $_SESSION['placa'] = $placa;
      $_SESSION['marca'] = $marca;
      $_SESSION['modelo'] = $modelo;
      $_SESSION['capacidade'] = $capacidade;
      header('location: ./updateTransport.php?result=success');
    } else {
      header('location: ./updateTransport.php?result=error');
    }
    mysqli_close($conn);  
?>