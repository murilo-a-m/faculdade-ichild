<?php
    require_once '../../database/connection.php';

    $responsavelId = $_SESSION['id'];

    $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
            FROM ichild.Dependentes
            WHERE responsavelId =$responsavelId
            ";
            
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<div class="dependente">';
                echo '<div class="icon">';
                    
                echo'</div>';
                echo'<div class="dados">';
                    echo"<h6 class='infoDados'>$row[nome]</h6>";
                    echo"<h6 class='infoDados'>$row[sobrenome]</h6>";
                    echo"<h6 class='infoDados'>$row[dataNascimento]</h6>";
                    echo"<h6 class='infoDados'>$row[documento]</h6>";
                    echo"<h6 class='infoDados'>$row[turno]</h6>";
                echo'</div>';
                echo'</div>';
            }
        }
        }   


    
;?>