<?php 
  require_once "../../database/connection.php";
  $responsavelId = $_SESSION['id'];

  $sql = "SELECT id, nome, sobrenome, cep, estado, cidade, rua, numero 
          FROM ichild.Responsaveis
          WHERE id =$responsavelId";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];
        $cep = $row['cep'];
        $estado = $row['estado'];
        $cidade = $row['cidade'];
        $rua = $row['rua'];
        $numero = $row['numero'];
      }
    }
  }   
;?>