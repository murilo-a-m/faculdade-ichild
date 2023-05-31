<?php 
  $dependentId = $_GET['id'];

  $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
          FROM ichild.Dependentes
          WHERE id = $dependentId";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        echo '<script>console.log("'.$row['turno'].'")</script>';
        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];
        $dataNascimento = $row['dataNascimento'];
        $documento = $row['documento'];
        $turno = $row['turno'];
      }
    }
  }   
;?>