<?php 
  session_start();
  if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'responsavel') {
    header('location: ../login/login.php?erro=true');
    exit;
  }
?>

<?php
  $id = $_POST['id'];
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $color = 'blue';
  $dateStart = $_POST['dateStart'];	
  $timeStart = $_POST['timeStart'];
  $dateEnd = $_POST['dateEnd'];	
  $timeEnd = $_POST['timeEnd'];
  $responsavelId = $_SESSION['id'];

  $start = new DateTime($dateStart . ' ' . $timeStart, new DateTimeZone('America/Sao_Paulo'));
  $startFormat = $start->format('Y-m-d H:i:s');

  $end = new DateTime($dateEnd . ' ' . $timeEnd, new DateTimeZone('America/Sao_Paulo'));
  $endFormat = $end->format('Y-m-d H:i:s');

  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn, "SET NAMES 'utf8'");
  mysqli_query($conn, 'SET character_set_connection=utf8');
  mysqli_query($conn, 'SET character_set_client=utf8');
  mysqli_query($conn, 'SET character_set_results=utf8');

  $sql = "UPDATE ichild.Agendas
  SET title = '$title', description = '$desc', color = '$color', start = '$startFormat', end = '$endFormat', responsavelId = '$responsavelId', transportadorId = NULL 
  WHERE id = $id";
?>  

<?php
  if (mysqli_query($conn, $sql)) {
    header('location: ./schedule.php');
  } else {
      header('location: ./update.php?result=error');
  }  
?>