<?php
require '../../components/responsibleAuthorization.php';
require_once "../../database/connection.php";

header('Content-Type: application/json');

$dependentId = $_POST['dependentId'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNascimento = $_POST['dataNascimento'];
$documento = $_POST['documento'];
$turno = $_POST['turno'];
$transportadorId = $_POST['transportadorId'];

$sql = "UPDATE ichild.Dependentes
        SET nome = '$nome', sobrenome = '$sobrenome', dataNascimento= '$dataNascimento', documento = '$documento', turno = '$turno', transportadorId = '$transportadorId' 
        WHERE id = $dependentId";

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
    $message = 'Erro ao realizar a requisição: ' . mysqli_error($conn);
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
