<?php
    session_start();

    include_once '../../database/connection.php';
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNascimento = $_POST['dataNascimento'];
    $documento = $_POST['documento'];
    $turno = $_POST['turno'];

    $sqlUpdate = "UPDATE ichild.Dependentes SET nome = '$nome', sobrenome='$sobrenome',dataNascimento='$dataNascimento', documento='$documento', turno ='$turno' 
    WHERE documento = '$documento'";
    $result = $conn -> query($sqlUpdate);

    if ($result = mysqli_query($conn, $sql)) {
        header('location: ../dependentPanel/dependentPanel.php');
    } else {
        header('location: ./editDependent.php?');
    }
    mysqli_close($conn);      
?>
