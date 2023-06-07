<?php 
    require_once '../../components/transportAuthorization.php';
    require_once '../../database/connection.php';
      
    $nome    = $_POST['nome'];	
    $sobrenome     = $_POST['sobrenome'];
    $cnh = $_POST['cnh'];
    $cep = $_POST['cep'];
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $capacidade = $_POST['capacidade'];
    $dataNascimento = $_POST ['dataNascimento']
    $transportadorId = $_SESSION['id'];

    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
      $foto = $_FILES["foto"]["tmp_name"];
      $foto_base64 = base64_encode(file_get_contents($foto));

      $sql = "UPDATE ichild.Transportadores
            SET nome = '$nome', sobrenome = '$sobrenome', cnh = '$cnh', cep = '$cep', placa = '$placa', marca = '$marca', modelo = '$modelo', capacidade = '$capacidade', imagem = '$foto_base64', dataNascimento = '$dataNascimento' 
            WHERE id = $transportadorId";  
    } else {
      $sql = "UPDATE ichild.Transportadores
            SET nome = '$nome', sobrenome = '$sobrenome', cnh = '$cnh', cep = '$cep', placa = '$placa', marca = '$marca', modelo = '$modelo', capacidade = '$capacidade'  
            WHERE id = $transportadorId";  
    }

    if ($result = mysqli_query($conn, $sql)) {
      $_SESSION['nome'] = $nome;
      $_SESSION['sobrenome'] = $sobrenome;
      $_SESSION['cnh'] = $cnh;
      $_SESSION['cep'] = $cep;
      $_SESSION['placa'] = $placa;
      $_SESSION['marca'] = $marca;
      $_SESSION['modelo'] = $modelo;
      $_SESSION['capacidade'] = $capacidade;
      if (isset($foto_base64)) {
        $_SESSION['imagem'] = $foto_base64;
      }
      header('location: ./updateTransport.php?result=success');
    } else {
      header('location: ./updateTransport.php?result=error');
    }
    mysqli_close($conn);  
?>