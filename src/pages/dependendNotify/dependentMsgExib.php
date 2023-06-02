<?php 
    require '../../database/connection.php';

    $responsavelId = $_SESSION['id'];

    $sql = "SELECT d.id, d.nome, d.sobrenome, d.dataNascimento, d.documento, d.turno, t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome
            FROM ichild.Dependentes d
            LEFT JOIN ichild.Transportadores t ON d.transportadorId = t.id
            WHERE responsavelId = $responsavelId";


    if(!empty($_GET['search'])) {
        $sql = "SELECT d.id, d.nome, d.sobrenome, d.dataNascimento, t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome, m.mensagem
        FROM ichild.Dependentes d
        INNER JOIN ichild.Transportadores t ON d.transportadorId = t.id
        INNER JOIN ichild.Mensagem m ON d.id = m.dependenteId
        AND d.responsavelId = $responsavelId";



        if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr class='panelContent'>";
                echo "<td>$row[nome] $row[sobrenome]</td>";
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
                    echo "<th class='id' scope='row'>$row[id]</th>";
                    echo "<td>$row[nome] $row[sobrenome]</td>";
                    echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                    echo "<td>$row[mensagem]</td>";
                    echo "</tr>";
                }
            }
        } 
    }
;?>

