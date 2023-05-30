
<?php 
session_start();
if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'transportador') {
    header('location: ../login/login.php?erro=true');
    exit;
}
?>

<?php
    $date = null;
    if (isset($_GET['date'])) {
    $date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));
    }
    $transportador = $_SESSION['id'];
    $horario = $_POST['horarioLog'];
    //$dependent = $_POST['']
    $statusLog = $_POST['statusLog'];
    $localLog = $_POST['localLog'];
    $transportadorId = 1;
    $dependentId = 4;

    $horario = new DateTime($date . ' ' . $horario, new DateTimeZone('America/Sao_Paulo'));
    $horarioFormat = $horario->format('Y-m-d H:i:s');
    //$horarioFormat = $horario->format('H:i');

    $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

    if (!$conn) {
        die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
    }

    $sql= "INSERT INTO ichild.Log_Do_Dia (horario, statusLog, localLog, transportadorId, dependentId) VALUES ('$horarioFormat','$statusLog', '$localLog','$transportadorId','$dependentId')";
 
?>

<?php
  echo "<div>";
  if ($result = mysqli_query($conn, $sql)) {
    header('location: ../painelLog/criarLog.php');
  } else {
    echo "<p>&nbsp;Erro executando INSERT: " . mysqli_error($conn . "</p>");
  }
      echo "</div>";
  mysqli_close($conn);
?>
