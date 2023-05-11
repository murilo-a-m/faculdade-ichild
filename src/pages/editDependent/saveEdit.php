<?php
    session_start();

    $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

    if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
    }

    include_once '../../database/connection.php';
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNascimento = $_POST['dataNascimento'];
    $documento = $_POST['documento'];
    $turno = $_POST['turno'];

    $sqlUpdate = "UPDATE ichild.Dependentes SET nome = '$nome', sobrenome='$sobrenome',dataNascimento='$dataNascimento', documento='$documento', turno ='$turno' 
    WHERE documento = '$documento'";
    $result = $conn -> query($sqlUpdate);

    if ($result = mysqli_query($conn, $sqlUpdate)) {
        header('location: ../dependentPanel/dependentPanel.php');
    } else {
        header('location: ./editDependent.php?');
    }
    mysqli_close($conn);      
?>
