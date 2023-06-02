<?php
  require_once '../../components/responsibleAuthorization.php';
  require_once '../../database/connection.php'
?>

<?php
  $id = $_GET['id'];

  $sql = "DELETE FROM Agendas WHERE id = $id";
?>

<?php
  if ($result = mysqli_query($conn, $sql)) {
    header('location: ./schedule.php');
  } else {
    header('location: ./update.php?result=error');
  }
  mysqli_close($conn);  
?>