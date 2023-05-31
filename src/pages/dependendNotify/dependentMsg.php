<?php
    if (isset($_GET['transportadorId'])) {
        $transportadorId = $_GET['transportadorId'];
        
        // Consulta SQL para recuperar o horário
        $mensagem = "SELECT mensagem FROM Mensagem WHERE transportadorId = $transportadorId";

            
        echo '<div value="<?php echo ($mensagem);?>" class="mensagens"></div>';
            
        // Executar a consulta no banco de dados
        $result = mysqli_query($conn, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $horario = $row['horario'];
        }
    }
?>
