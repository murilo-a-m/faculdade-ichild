<?php 
    require '../../database/connection.php';

    $sql = "SELECT m.id, d.nome AS dependente_nome, d.sobrenome AS dependente_sobrenome, t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome, m.mensagem
            FROM Mensagem m
            INNER JOIN Dependentes d ON m.dependentId = d.id
            INNER JOIN Transportadores t ON m.transportadorId = t.id
            WHERE d.id IN (SELECT id FROM Dependentes WHERE responsavelId = {$_SESSION['id']})
            ORDER BY m.id DESC";

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT SELECT m.id, d.nome AS dependente_nome, d.sobrenome AS dependente_sobrenome, t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome, m.mensagem
                FROM Mensagem m
                INNER JOIN Dependentes d ON m.dependentId = d.id
                INNER JOIN Transportadores t ON m.transportadorId = t.id
                WHERE d.nome LIKE '%$data%' OR d.sobrenome LIKE '%$data%' OR r.nome LIKE '%$data%' OR r.sobrenome LIKE '%$data%' OR t.nome LIKE '%$data%' OR t.sobrenome LIKE '%$data%' OR m.mensagem LIKE '%$data%'
                AND d.id IN (SELECT id FROM Dependentes WHERE responsavelId = {$_SESSION['id']})
                ORDER BY m.id DESC";

        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr class='panelContent'>";
                    echo "<th scope='row'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#CB96CB' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                              <circle cx='8' cy='8' r='8'/>
                            </svg></th>
                          </th>";
                    echo "<td scope='row'>$row[dependente_nome] $row[dependente_sobrenome]</td>";
                    echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                    echo "<td>$row[mensagem]</td>";
                    echo "</tr>";
                  }              
                }
            }
        } else {
          if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)){
                echo "<tr class='panelContent'>";
                echo "<th scope='row'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#CB96CB' class='bi bi-circle-fill' viewBox='0 0 16 16'>
                    <circle cx='8' cy='8' r='8'/>
                  </svg></th>
                </th>";
                echo "<td>$row[dependente_nome] $row[dependente_sobrenome]</td>";
                echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                echo "<td>$row[mensagem]</td>";
                echo "</tr>";
              }
            }
          }
        }
;?>

