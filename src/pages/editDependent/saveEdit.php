<?php

    include_once('../dependentPanel/dependentTable.php');

    if(isset($_POST['update']))
    { 
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $dataNascimento = $_POST['dataNascimento'];
        $documento = $_POST['documento'];
        $turno = $_POST['turno'];

        $sqlUpdate = "UPDATE Dependentes SET nome = '$nome', sobrenome='$sobrenome',dataNascimento='$dataNascimento', documento='$documento', turno ='$turno' 
        WHERE id = '$id'";
        $result = $conn -> query($sqlUpdate);
    }

    header('Location: dependentPanel.php')
?>