<?php
    require_once '../../database/connection.php';
    
    $transportadorId = $_SESSION['id'];

    $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
            FROM ichild.Log_do_dia
            WHERE transportadorId = $transportadorId
            ";
        
?>