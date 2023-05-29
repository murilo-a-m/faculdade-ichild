<?php
      require_once '../../database/connection.php';
      require_once '../../components/responsibleAuthorization.php';

      $nome    = $_POST['nome'];	
      $sobrenome     = $_POST['sobrenome'];
      $dataNascimento     = $_POST['dataNascimento'];
      $documento     = $_POST['documento'];
      $turno     = $_POST['turno'];
      $responsavelId = $_SESSION['id'];
      
      $sql = "SELECT id, nome, documento
        FROM ichild.Dependentes
        WHERE documento = '$documento'";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            if ($row['documento'] == $documento) {
              header('location: ./registerDependent.php?erro=documentExists');
              exit;
            } 
          }
        }
      }

      $sql = "INSERT INTO Dependentes ( nome, sobrenome, dataNascimento, documento, turno, responsavelId) 
              VALUES ('$nome','$sobrenome', '$dataNascimento', '$documento','$turno','$responsavelId')";?>

      <?php
        echo "<div>";
        if ($result = mysqli_query($conn, $sql)) {
          header('location: ../responsibleMenu/responsibleMenu.php');
        } else {
          echo "<p>&nbsp;Erro executando INSERT: " . mysqli_error($conn . "</p>");
        }
            echo "</div>";
        mysqli_close($conn);
      ?>
