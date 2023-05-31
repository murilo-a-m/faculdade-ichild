<?php
  require_once '../../database/connection.php';

  $transportadorId = $_SESSION['id'];
  session_write_close();

  $sql = "SELECT id, nome, sobrenome, cnh, cep, placa, marca, modelo, capacidade 
          FROM ichild.Transportadores
          WHERE id = $transportadorId";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];
        $cnh = $row['cnh'];
        $cep = $row['cep'];
        $placa = $row['placa'];
        $marca = $row['marca'];
        $modelo = $row['modelo'];
        $capacidade = $row['capacidade'];
      }
    }
  }   
;?>