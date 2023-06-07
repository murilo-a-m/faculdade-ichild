<?php 
    require_once '../../database/connection.php';

    $transportadorId = $_SESSION['id'];

    $sql = "SELECT l.id, l.horario, l.statusLog, l.localLog, d.nome AS dependente_nome, d.sobrenome AS dependente_sobrenome, r.nome AS responsavel_nome, r.sobrenome AS responsavel_sobrenome
        FROM ichild.log_do_dia l
        INNER JOIN ichild.Dependentes d ON l.dependentId = d.id
        INNER JOIN ichild.Responsaveis r ON d.responsavelId = r.id
        WHERE l.transportadorId = $transportadorId
        ORDER BY l.horario DESC";

    if(!empty($_GET['search'])) {
      $data = $_GET['search'];
      $sql = "SELECT l.id, l.horario, l.statusLog, l.localLog, d.nome AS dependente_nome, d.sobrenome AS dependente_sobrenome, r.nome AS responsavel_nome, r.sobrenome AS responsavel_sobrenome
        FROM ichild.log_do_dia l
        INNER JOIN ichild.Dependentes d ON l.dependentId = d.id
        INNER JOIN ichild.Responsaveis r ON d.responsavelId = r.id
        WHERE (l.horario LIKE '%$data%' OR l.statusLog LIKE '%$data%' OR l.localLog LIKE '%$data%' OR d.nome LIKE '%$data%' OR d.sobrenome LIKE '%$data%')
        AND l.transportadorId = $transportadorId
        ORDER BY l.horario DESC";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            echo "<tr class='panelContent'>";

            if ($row['statusLog'] == 'Chegou ao destino') {
              echo "<th scope='row'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#27374D' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                          <circle cx='8' cy='8' r='8'/>
                        </svg>
                    </th>";
            } else {
                echo "<th>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#B3B8BB' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                          <circle cx='8' cy='8' r='8'/>
                        </svg>
                    </th>";
            }

            $horario = strtotime($row['horario']);
            $data = date('Y-m-d', $horario);
            $hora = date('H:i', $horario);

            echo "<td>$data</td>";
            echo "<td>$hora</td>";
            echo "<td>$row[statusLog]</td>";
            echo "<td>$row[localLog]</td>";
            echo "<td>$row[dependente_nome] $row[dependente_sobrenome]</td>";
            echo "<td>$row[responsavel_nome] $row[responsavel_sobrenome]</td>";
            echo "</tr>";
          }
        }
      } 
    } else {
      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            echo "<tr class='panelContent'>";
            if ($row['statusLog'] == 'Chegou ao destino') {
              echo "<th scope='row'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#27374D' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                          <circle cx='8' cy='8' r='8'/>
                        </svg>
                    </th>";
            } else {
                echo "<th>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#B3B8BB' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                          <circle cx='8' cy='8' r='8'/>
                        </svg>
                    </th>";
            }

            $horario = strtotime($row['horario']);
            $data = date('Y-m-d', $horario);
            $hora = date('H:i', $horario);

            echo "<td>$data</td>";
            echo "<td>$hora</td>";
            echo "<td>$row[statusLog]</td>";
            echo "<td>$row[localLog]</td>";
            echo "<td>$row[dependente_nome] $row[dependente_sobrenome]</td>";
            echo "<td>$row[responsavel_nome] $row[responsavel_sobrenome]</td>";
            echo "</tr>";
          }
        }
      } 
    }
;?>

