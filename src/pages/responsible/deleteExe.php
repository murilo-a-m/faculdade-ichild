<?php
  require_once '../../components/responsibleAuthorization.php';
  require_once '../../database/connection.php';

  $responsavelId = $_SESSION['id'];
  $sql = "DELETE FROM responsaveis WHERE id = $responsavelId"
  
?>

<?php
  if ($result = mysqli_query($conn, $sql)) {
    header('location: ../home/home.php?result=success');

  } else {
    header('location: ./update.php?result=error');
  }
  mysqli_close($conn);  
?>