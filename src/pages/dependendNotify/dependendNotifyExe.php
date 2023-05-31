<?php
    session_start();
    require_once "../../database/connection.php";


    $transportadorId = $_SESSION['id'];
    $message = $_POST ['messageNot'];
    $dependentId = $_POST['dependenteNotify'];

    $sql = "INSERT INTO ichild.Mensagem (mensagem, transportadorId, dependentId) VALUES ('$message', '$transportadorId', '$dependentId')";

    

    if ($result = mysqli_query($conn, $sql)) {       
        $status = 'success';
        $message = 'Requisição bem sucedida';
        $statusCode = 200;

        http_response_code($statusCode);

        $response = array(
            'status' => $status,
            'message' => $message,
        );
        $jsonResponse = json_encode($response);
        echo $jsonResponse;
        header('location: ./notifyForm.php');
        exit;

    } else {
        $status = 'error';
        $message = 'Erro ao realizar a requisição';
        $statusCode = 500;

        http_response_code($statusCode);

        $response = array(
            'status' => $status,
            'message' => $message,
        );
        $jsonResponse = json_encode($response);
        echo $jsonResponse;
        exit;
    }
?>
