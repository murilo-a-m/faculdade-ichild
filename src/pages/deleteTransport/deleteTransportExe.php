<?php
  require_once '../../components/transportAuthorization.php';
  require_once '../../database/connection.php';

  $transportadorId = $_SESSION['id'];

  $sqlDeleteTransportador = "DELETE FROM Transportadores WHERE id = $transportadorId"
?>

<?php
  if ($result = mysqli_query($conn, $sqlDeleteTransportador)) {
      header('location: ../home/home.php?result=success');
    } else {
    header('location: ../updateTransport/updateTransport.php?result=error');
  }
  mysqli_close($conn);  
?>