<?php
    require_once '../../database/connection.php';


    $responsavelId = $_SESSION['id'];

    $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
            FROM ichild.Dependentes
            WHERE responsavelId = $responsavelId
            ";
            
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<div class="dependente">';
                echo '<div class="icon">';
                echo'</div>';
                echo"<div value=$row[id] id='DependentSubmit' class='dados'>";
                echo"<div class='dependent__img'></div>";
                    echo"<h6 class='notify'>$row[nome]</h6>";
            }
        }
    }