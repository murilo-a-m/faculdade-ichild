<?php 
  require_once '../../components/responsibleAuthorization.php';
  require_once '../../components/connection.php';

  mysqli_query($conn, "SET NAMES 'utf8'");
  mysqli_query($conn, 'SET character_set_connection=utf8');
  mysqli_query($conn, 'SET character_set_client=utf8');
  mysqli_query($conn, 'SET character_set_results=utf8');

  $responsavelId = $_SESSION['id'];

  $sql = "SELECT * FROM Agendas WHERE responsavelId = '$responsavelId'";
  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $json = json_encode($rows);
  echo($json)
?>
