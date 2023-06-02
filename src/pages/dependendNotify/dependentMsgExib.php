<?php 
    require '../../database/connection.php';

    $transportadorId = $_SESSION['id'];


    $sql = "SELECT d.nome AS dependente_nome, d.sobrenome AS dependente_sobrenome,
    t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome,
    m.mensagem
    FROM Mensagem m
    INNER JOIN Dependentes d ON m.dependentId = d.id
    INNER JOIN Transportadores t ON m.transportadorId = t.id";





    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr class='panelContent'>";
                echo "<td>$row[dependente_nome] $row[dependente_sobrenome]</td>";
                echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                echo "<td>$row[message]</td>";
                echo "</tr>";
            }
        }
    }else {
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

