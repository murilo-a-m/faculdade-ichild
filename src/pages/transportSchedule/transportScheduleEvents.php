<?php 
  session_start();
  if (!isset($_SESSION['id']) || $_SESSION['role'] != 'transportador') {
    header('location: ../loginTransport/loginTransport.php?erro=true');
    exit;
  }

  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');
  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn, "SET NAMES 'utf8'");
  mysqli_query($conn, 'SET character_set_connection=utf8');
  mysqli_query($conn, 'SET character_set_client=utf8');
  mysqli_query($conn, 'SET character_set_results=utf8');

  $transportadorId = $_SESSION['id'];

  $sql = "SELECT * FROM Agendas WHERE transportadorId = '$transportadorId'";
  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $json = json_encode($rows);
  echo($json)
?>
