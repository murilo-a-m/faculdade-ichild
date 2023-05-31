<?php 
    require '../../database/connection.php';

    $transportadorId = $_SESSION['id'];

    $sql = "SELECT d.id, d.nome, d.sobrenome, d.turno, r.nome AS responsavel_nome, r.sobrenome AS responsavel_sobrenome
            FROM ichild.Dependentes d
            INNER JOIN ichild.Responsaveis r ON d.responsavelId = r.id
            WHERE transportadorId = $transportadorId
            LIMIT 3
            ";
            

    echo '<div class="content__card-transport card__dependents">';
    echo '<div class="card__container">';
    echo '<p class="card__title">Dependentes</p>';

    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
          echo '<div class="card__transportContent">';
            echo '<div class="dependent__img"></div>';
            echo '<div class="dependent__info">';
              echo '<p class="dependent__info-title">Nome</p>';
              echo "<p class='dependent__info-text'>$row[nome] $row[sobrenome]</p>";
            echo '</div>';

            echo '<div class="dependent__info">';
              echo '<p class="dependent__info-title">Responsável</p>';
              echo "<p class='dependent__info-text'>$row[responsavel_nome] $row[responsavel_sobrenome]</p>";
            echo '</div>';

            echo '<div class="dependent__info">';
              echo '<p class="dependent__info-title">Turno</p>';
              echo "<p class='dependent__info-text'>$row[turno]</p>";
            echo '</div>';
          echo '</div>';
        }
      }
    }   
    echo '<a class="card__transportButton" href="../transportDependentPanel/transportDependentPanel.php"><button>Ver tudo</button></a>';
    echo '</div>';
    echo '</div>';
;?>

