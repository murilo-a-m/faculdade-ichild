<?php 
    require_once '../../database/connection.php';

    $responsavelId = $_SESSION['id'];

    $sql = "SELECT id, nome, documento, turno
            FROM ichild.Dependentes
            WHERE responsavelId =$responsavelId";

    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
          
        }
      }
    }   

;?>

