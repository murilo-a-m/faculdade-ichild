<?php
    require_once '../../database/connection.php';


    $responsavelId = $_SESSION['id'];

    $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
            FROM ichild.Log_do_dia
            WHERE transportadorId = $transportadorId
            ";
        