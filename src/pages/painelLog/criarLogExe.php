<?php
    session_start();
    require_once "../../database/connection.php";
    header('Content-Type: application/json');

    $date = null;
    if (isset($_GET['date'])) {
    $date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));
    }
    $transportador = $_SESSION['id'];
    $horario = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $statusLog = $_POST['statusLog'];
    $localLog = $_POST['localLog'];
    $dependentId = $_POST['dependenteLog'];

    $horarioFormat = $horario->format('Y-m-d H:i:s');

    $sql= "INSERT INTO ichild.Log_Do_Dia (horario, statusLog, localLog, transportadorId, dependentId) VALUES ('$horarioFormat','$statusLog', '$localLog','$transportador','$dependentId')";

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
