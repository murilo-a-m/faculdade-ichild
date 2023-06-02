<?php 
  require_once '../../components/responsibleAuthorization.php';
  require_once '../../database/connection.php';
?>

<?php
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $color = $_POST['color'];
  $dateStart = $_POST['dateStart'];	
  $timeStart = $_POST['timeStart'];
  $dateEnd = $_POST['dateEnd'];	
  $timeEnd = $_POST['timeEnd'];
  $responsavelId = $_SESSION['id'];
  $dependentId = $_POST['dependente'];

  $start = new DateTime($dateStart . ' ' . $timeStart, new DateTimeZone('America/Sao_Paulo'));
  $startFormat = $start->format('Y-m-d H:i:s');

  $end = new DateTime($dateEnd . ' ' . $timeEnd, new DateTimeZone('America/Sao_Paulo'));
  $endFormat = $end->format('Y-m-d H:i:s');

  $sqlTransportador = "SELECT transportadorId FROM Dependentes WHERE id = $dependentId";
  $resultTransportador = mysqli_query($conn, $sqlTransportador);

  if ($rowTransportador = mysqli_fetch_assoc($resultTransportador)) {
    $transportadorId = $rowTransportador['transportadorId'];

    $sql = "INSERT INTO Agendas ( title, description, color, start, end, responsavelId, dependentId, transportadorId) 
              VALUES ('$title','$desc', '$color', '$startFormat','$endFormat','$responsavelId', '$dependentId', $transportadorId)";
  }
?>

<?php
  echo "<div>";
  if ($result = mysqli_query($conn, $sql)) {
    header('location: ../schedule/schedule.php');
  } else {
    echo "<p>&nbsp;Erro executando INSERT: " . mysqli_error($conn . "</p>");
  }
      echo "</div>";
  mysqli_close($conn);?>