<?php
    include_once '../../components/responsibleAuthorization.php';
    include_once '../../database/connection.php';
    header('Content-Type: application/json');

    $dependentId = $_POST['dependentId'];

    $sql = "DELETE FROM Dependentes WHERE id =$dependentId";
    
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