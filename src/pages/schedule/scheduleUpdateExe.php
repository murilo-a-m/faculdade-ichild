<?php
  require_once '../../components/transportAuthorization.php';
  require_once '../../database/connection.php';

  $id = $_POST['id'];
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $color = $_POST['color'];
  $dateStart = $_POST['dateStart'];	
  $timeStart = $_POST['timeStart'];
  $dateEnd = $_POST['dateEnd'];	
  $timeEnd = $_POST['timeEnd'];
  $responsavelId = $_SESSION['id'];

  $start = new DateTime($dateStart . ' ' . $timeStart, new DateTimeZone('America/Sao_Paulo'));
  $startFormat = $start->format('Y-m-d H:i:s');

  $end = new DateTime($dateEnd . ' ' . $timeEnd, new DateTimeZone('America/Sao_Paulo'));
  $endFormat = $end->format('Y-m-d H:i:s');

  $sqlDependent = "SELECT dependentId FROM Agendas WHERE id = $id";
  $resultDependent = mysqli_query($conn, $sqlDependent);

  if ($rowDependent = mysqli_fetch_assoc($resultDependent)) {
    $dependentId = $rowDependent['dependentId'];

    $sqlTransportador = "SELECT transportadorId FROM Dependentes WHERE id = $dependentId";
    $resultTransportador = mysqli_query($conn, $sqlTransportador);

    if ($rowTransportador = mysqli_fetch_assoc($resultTransportador)) {
      $transportadorId = $rowTransportador['transportadorId'];
  
      $sql = "UPDATE ichild.Agendas
      SET title = '$title', description = '$desc', color = '$color', start = '$startFormat', end = '$endFormat', responsavelId = '$responsavelId', transportadorId = $transportadorId 
      WHERE id = $id";
    }
  }

  if (mysqli_query($conn, $sql)) {
    header('location: ./schedule.php');
  } else {
      header('location: ./update.php?result=error');
  }  
?>