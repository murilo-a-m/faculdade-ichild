<?php
    require_once '../../database/connection.php';

    $responsavelId = $_SESSION['id'];
    // transportadorId = $_SESSION['id'];


    $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
            FROM ichild.Log_do_dia
            WHERE responsavelId = $responsavelId
            ";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class='dependenteLog'>";
                    echo "<div class='iconLog'>";
                        echo "<img id='doneImg' src='../../img/marcacaoDone.png' alt=''>";
                    echo"</div>";
                    echo "<div class='dadosLog'>";
                        echo "<h6 class='infoDadosLog'>13:55</h6>";
                        echo "<h6 class='infoDadosLog'>$row[nome]Elvis</h6>";
                        echo "<h6 class='infoDadosLog'>Em transito</h6>";
                        echo "<h6 class='infoDadosLog'>Marista</h6>";
                    echo "</div>";
                echo "</div>";
            }

        }

    }

?>