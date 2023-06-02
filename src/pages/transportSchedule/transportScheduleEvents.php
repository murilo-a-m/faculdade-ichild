<?php 
  require '../../components/transportAuthorization.php';
  require '../../database/connection.php';

  $transportadorId = $_SESSION['id'];

  $sql = "SELECT * FROM Agendas WHERE transportadorId = '$transportadorId'";
  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $json = json_encode($rows);
  echo($json)
?>
