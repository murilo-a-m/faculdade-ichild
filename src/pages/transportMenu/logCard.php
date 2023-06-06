<?php 
    require_once '../../database/connection.php';

    $transportadorId = $_SESSION['id'];

    $sql = "SELECT l.id, l.horario, l.statusLog, l.localLog, d.nome AS dependente_nome, d.sobrenome AS dependente_sobrenome
            FROM ichild.log_do_dia l
            INNER JOIN ichild.Dependentes d ON l.dependentId = d.id
            WHERE l.transportadorId = $transportadorId
            ORDER BY l.horario DESC
            LIMIT 6";
            
    echo '<div class="content__card-transport card__log">';
    echo '<div class="card__container">';
    echo '<p class="card__title">log do dia</p>';

    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
          $horario = strtotime($row['horario']);
          $hora = date('H:i', $horario);

          echo '<div class="card__log-transportContent">';
            if ($row['statusLog'] == 'Chegou ao destino') {
              echo "<div class='log__lightTransport'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#27374D' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                          <circle cx='8' cy='8' r='8'/>
                        </svg>
                    </div>";
            } else {
              echo "<div class='log__lightTransport'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#B3B8BB' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                        <circle cx='8' cy='8' r='8'/>
                      </svg>
                    </div>";
            }
              echo "<p class='log__text'>$hora - $row[statusLog] | $row[dependente_nome]</p>";
          echo '</div>';
        }
        echo '<a class="card__transportButton" href="../painelLog/painelLog.php"><button>Ver tudo</button></a>';
      } else {
        echo "<p class='null'>Não há nenhuma log</p>";
      }
    }   
    echo '</div>';
    echo '</div>';
;?>

