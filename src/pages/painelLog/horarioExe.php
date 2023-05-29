   
<?php
    session_start();
    require '../../components/headerTransportMenu.php';
    require_once '../../database/connection.php';

   $horario = ""; // Inicialize a variável $horario
        if (isset($_GET['dependentId'])) {
            $dependentId = $_GET['dependentId'];
            
            // Consulta SQL para recuperar o horário
            $sql = "SELECT horario FROM Log_do_dia WHERE dependentId = $dependentId ORDER BY horario DESC LIMIT 1";
            
            // Executar a consulta no banco de dados
            $result = mysqli_query($connection, $sql);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $horario = $row['horario'];
            }
        }
?>
