<?php 
    require '../../database/connection.php';

    $responsavelId = $_SESSION['id'];

    $sql = "SELECT d.id, d.nome, d.sobrenome, d.turno, t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome
            FROM ichild.Dependentes d
            INNER JOIN ichild.Transportadores t ON d.transportadorId = t.id
            WHERE responsavelId =$responsavelId
            LIMIT 3
            ";
            

    echo '<div class="content__card card__dependents">';
    echo '<div class="card__container">';
    echo '<p class="card__title">Dependentes</p>';

    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
          echo '<div class="card__dependents-content">';
            echo '<div class="dependent__img"></div>';
            echo '<div class="dependent__info">';
              echo '<p class="dependent__info-title">Nome</p>';
              echo "<p class='dependent__info-text'>$row[nome] $row[sobrenome]</p>";
            echo '</div>';

            echo '<div class="dependent__info">';
              echo '<p class="dependent__info-title">Transportador</p>';
              echo "<p class='dependent__info-text'>$row[transportador_nome] $row[transportador_sobrenome]</p>";
            echo '</div>';

            echo '<div class="dependent__info">';
              echo '<p class="dependent__info-title">Turno</p>';
              echo "<p class='dependent__info-text'>$row[turno]</p>";
            echo '</div>';
          echo '</div>';
        }
      }
    }   
    echo '<a class="card__button" href="../dependentPanel/dependentPanel.php"><button>Ver tudo</button></a>';
    echo '</div>';
    echo '</div>';
;?>

