<?php 
    require '../../database/connection.php';

    $sql = "SELECT m.id, d.nome AS dependente_nome, r.nome AS responsavel_nome, r.sobrenome AS responsavel_sobrenome, d.sobrenome AS dependente_sobrenome,
            t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome,
            m.mensagem
            FROM Mensagem m
            INNER JOIN Dependentes d ON m.dependentId = d.id
            INNER JOIN Transportadores t ON m.transportadorId = t.id
            INNER JOIN Responsaveis r ON r.id = d.responsavelId 
            ORDER BY m.id DESC";

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT m.id, d.nome AS dependente_nome, r.nome AS responsavel_nome, r.sobrenome AS responsavel_sobrenome, d.sobrenome AS dependente_sobrenome,
                t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome,
                m.mensagem
                FROM Mensagem m
                INNER JOIN Dependentes d ON m.dependentId = d.id
                INNER JOIN Transportadores t ON m.transportadorId = t.id
                INNER JOIN Responsaveis r ON r.id = d.responsavelId 
                WHERE d.nome LIKE '%$data%' OR d.sobrenome LIKE '%$data%' OR r.nome LIKE '%$data%' OR r.sobrenome LIKE '%$data%' OR t.nome LIKE '%$data%' OR t.sobrenome LIKE '%$data%' OR m.mensagem LIKE '%$data%'
                ORDER BY m.id DESC";

        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr class='panelContent'>";
                    echo "<td>$row[dependente_nome] $row[dependente_sobrenome]</td>";

                    if ($_SESSION['role']=='responsavel'){
                        echo "<td>$row[responsavel_nome] $row[responsavel_sobrenome]</td>";
                    }else{
                        echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                    }

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
                    echo "<td>$row[dependente_nome] $row[dependente_sobrenome]</td>";

                    if ($_SESSION['role']=='responsavel'){
                        echo "<td>$row[responsavel_nome] $row[responsavel_sobrenome]</td>";
                    }else{
                        echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                    }

                    
                    echo "<td>$row[mensagem]</td>";
                    echo "</tr>";
                }
            }
        }
    }
;?>

