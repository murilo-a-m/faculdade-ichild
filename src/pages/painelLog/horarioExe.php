   
<?php

   
        if (isset($_GET['dependentId'])) {
            $dependentId = $_GET['dependentId'];
            
            // Consulta SQL para recuperar o horário
            $horario = "SELECT horario FROM Log_do_dia WHERE dependentId = $dependentId ORDER BY horario DESC LIMIT 1";

                
            echo '<div class="col-md-8 mt-2">';
                echo '<label for="time" class="form-label">Horario</label>';
                echo '<input  value="<?php echo ($horario);?>" type="time" class="form-control" />';
                echo '<span id="name-error" class="error"></span>';
            echo'</div>';
                
            // Executar a consulta no banco de dados
            $result = mysqli_query($connection, $sql);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $horario = $row['horario'];
            }
        }
?>
