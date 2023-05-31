<html>
    <?php
        require_once '../../database/connection.php';
        $transportadorId = $_SESSION['id'];

        $sql = "SELECT Log_do_dia.horario, Log_do_dia.statusLog, Log_do_dia.localLog, Log_do_dia.dependentId, Dependentes.nome
                FROM Log_do_dia
                INNER JOIN Dependentes ON Log_do_dia.dependentId = Dependentes.id
                WHERE Log_do_dia.transportadorId = $transportadorId";

        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='dependenteLog'>";

                    if ($row['statusLog'] == 'Chegou ao destino') {
                        echo "<div class='iconLogTransport'>";
                        echo "</div>";
                    } else {
                        echo "<div class='iconLogTransport2'>";
                        echo "</div>";
                    }
                    echo "<div class='dadosLog'>";
                    echo "<h6 class='infoDadosLog'>" . date('d/m/Y H:i:s', strtotime($row['horario'])) . "</h6>";
                    echo "<h6 class='infoDadosLog'>" . $row['nome'] . "</h6>";
                    echo "<h6 class='infoDadosLog'>" . $row['statusLog'] . "</h6>";
                    echo "<h6 class='infoDadosLog'>" . $row['localLog'] . "</h6>";
                    echo "</div>";
                    echo "</div>";
                }
            }
        }
    ?>
    <script src="./painelLog.js"></script>
</html>
