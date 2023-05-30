<?php 
    require '../../database/connection.php';

    $responsavelId = $_SESSION['id'];

    $sql = "SELECT id, nome, documento, turno
            FROM ichild.Dependentes
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
              echo "<p class='dependent__info-text'>$row[nome]</p>";
            echo '</div>';

            echo '<div class="dependent__info">';
              echo '<p class="dependent__info-title">Documento</p>';
              echo "<p class='dependent__info-text'>$row[documento]</p>";
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

