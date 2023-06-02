<?php 
    require_once '../../database/connection.php';

    $transportadorId = $_SESSION['id'];

    $sql = "SELECT d.id, d.nome, d.sobrenome, d.dataNascimento, d.documento, d.turno, r.nome AS responsavel_nome, r.sobrenome AS responsavel_sobrenome
            FROM ichild.Dependentes d
            INNER JOIN ichild.Responsaveis r ON d.responsavelId = r.id
            WHERE transportadorId = $transportadorId
            ";

    if(!empty($_GET['search'])) {
      $data = $_GET['search'];
      $sql = "SELECT d.id, d.nome, d.sobrenome, d.dataNascimento, d.documento, d.turno, r.nome AS responsavel_nome, r.sobrenome AS responsavel_sobrenome
        FROM ichild.Dependentes d
        INNER JOIN ichild.Responsaveis r ON d.responsavelId = r.id
        WHERE (d.nome LIKE '%$data%' OR d.sobrenome LIKE '%$data%' OR d.documento LIKE '%$data%' OR d.turno LIKE '%$data%' OR r.nome LIKE '%$data%' OR r.sobrenome LIKE '%$data%')
        AND d.transportadorId = $transportadorId";


      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            echo "<tr class='panelContent'>";
            echo "<th class='id' scope='row'>$row[id]</th>";
            echo "<td>$row[nome] $row[sobrenome]</td>";
            echo "<td>" . date('d/m/Y', strtotime($row['dataNascimento'])) . "</td>";
            echo "<td>$row[documento]</td>";
            echo "<td>$row[turno]</td>";
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
            echo "<th class='id' scope='row'>$row[id]</th>";
            echo "<td>$row[nome] $row[sobrenome]</td>";
            echo "<td>" . date('d/m/Y', strtotime($row['dataNascimento'])) . "</td>";
            echo "<td>$row[documento]</td>";
            echo "<td>$row[turno]</td>";
            echo "<td>$row[responsavel_nome] $row[responsavel_sobrenome]</td>";
            echo "</tr>";
          }
        }
      } 
    }
;?>

