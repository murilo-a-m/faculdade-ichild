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
                echo"<div value=$row[id] id='DependentSubmit' class='dados'>";
                    echo"<h6  class='infoDados'>$row[nome]</h6>";
                    echo"<h6 class='infoDados'>$row[sobrenome]</h6>";
                    echo"<h6 class='infoDados'>$row[dataNascimento]</h6>";
                    echo"<h6 class='infoDados'>$row[documento]</h6>";
                    echo"<h6 class='infoDados'>$row[turno]</h6>";
                    echo "<a href=''><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                  </svg></a>";
                echo'</div>';
                echo'</div>';
            }
        }
        }       
;?>