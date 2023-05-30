<?php
    require_once '../../database/connection.php';

    $responsavelId = $_SESSION['id'];
    // $transportadorId = $_SESSION['id'];

    $sql = "SELECT horario, statusLog, localLog, dependentId
            FROM Log_do_dia
            WHERE transportadorId = $transportadorId";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='dependenteLog'>";
                echo "<div class='iconLogTransport'>";
                echo "</div>";
                echo "<div class='dadosLog'>";
                echo "<h6 class='infoDadosLog'>" . $row['horario'] . "</h6>";
                echo "<h6 class='infoDadosLog'>" .  "Elvis</h6>";
                echo "<h6 class='infoDadosLog'>" . $row['statusLog'] . "</h6>";
                echo "<h6 class='infoDadosLog'>" . $row['localLog'] . "</h6>";
                echo "</div>";
                echo "</div>";
            }
        }
    }
?>