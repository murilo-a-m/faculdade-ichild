<?php 
    require_once '../../database/connection.php';

    $responsavelId = $_SESSION['id'];

    $sql = "SELECT d.id, d.nome, d.sobrenome, d.dataNascimento, d.documento, d.turno, t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome
            FROM ichild.Dependentes d
            LEFT JOIN ichild.Transportadores t ON d.transportadorId = t.id
            WHERE responsavelId = $responsavelId";

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT d.id, d.nome, d.sobrenome, d.dataNascimento, d.documento, d.turno, t.nome AS transportador_nome, t.sobrenome AS transportador_sobrenome
            FROM ichild.Dependentes d
            INNER JOIN ichild.Transportadores t ON d.transportadorId = t.id
            WHERE (d.nome LIKE '%$data%' OR d.sobrenome LIKE '%$data%' OR d.documento LIKE '%$data%' OR d.turno LIKE '%$data%' OR t.nome LIKE '%$data%' OR t.sobrenome LIKE '%$data%')
            AND d.responsavelId = $responsavelId";

        if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr class='panelContent'>";
                echo "<th class='id' scope='row'>$row[id]</th>";
                echo "<td>$row[nome] $row[sobrenome]</td>";
                echo "<td>" . date('d/m/Y', strtotime($row['dataNascimento'])) . "</td>";
                echo "<td>$row[documento]</td>";
                echo "<td>$row[turno]</td>";
                echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                echo "<td><a target='blank' href='http://localhost/ichild/src/pages/editDependent/editDependent.php?id=$row[id]'>
                <svg xmlns='http://www.w3.org/2000/svg ' id= 'botaoDependentEdit' fill='#3ab5df' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                </svg></a>
                <button id='botaolixo' onclick='deleteDependent($row[id])'>
                    <svg xmlns='http://www.w3.org/2000/svg' id='botaoDependentDelete' fill='red' class='bi bi-trash' viewBox='0 0 16 16'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                        <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                    </svg>
                </button></td>";
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
                    echo "<td>$row[transportador_nome] $row[transportador_sobrenome]</td>";
                    echo "<td><a href='http://localhost/ichild/src/pages/editDependent/editDependent.php?id=$row[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg ' id='botaoDependentEdit' fill='#3ab5df' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                    </svg></a>
                    <button id='botaolixo' onclick='deleteDependent($row[id])'>
                        <svg xmlns='http://www.w3.org/2000/svg' id='botaoDependentDelete' fill='red' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                            <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                        </svg>
                    </button></td>";
                    echo "</tr>";
                }
            }
        } 
    }
;?>

