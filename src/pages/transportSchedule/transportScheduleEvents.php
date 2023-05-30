<?php 
  session_start();
  if (!isset($_SESSION['id']) || $_SESSION['role'] != 'transportador') {
    header('location: ../loginTransport/loginTransport.php?erro=true');
    exit;
  }

  require '../../database/connection.php';

  $transportadorId = $_SESSION['id'];

  $sql = "SELECT * FROM Agendas WHERE transportadorId = '$transportadorId'";
  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $json = json_encode($rows);
  echo($json)
?>
