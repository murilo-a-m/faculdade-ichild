<?php 
  require '../../database/connection.php';

  $sql = "SELECT mensagem
          FROM ichild.Mensagem
          WHERE transportadorId = $_SESSION[id]
          ORDER BY id DESC
          LIMIT 3";

  echo '<div class="content__card-transport card__notifications">';
  echo '<div class="card__container">';
  echo '<p class="card__title">Notificações enviadas</p>';

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        echo '<div class="card__notifications-transportContent">';
            echo "<div class='notifications__transportLight'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#526D82' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                        <circle cx='8' cy='8' r='8'/>
                      </svg>
                  </div>";
            echo "<p class='notifications__text'>$row[mensagem]</p>";
        echo '</div>';
      }
      echo '<a class="card__transportButton" href="../dependendNotify/dependendNotify.php"><button>Ver tudo</button></a>';
    } else {
      echo "<p class='null'>Não há nenhuma log</p>";
    }  
  echo '</div>';
  echo '</div>';
  }
?>