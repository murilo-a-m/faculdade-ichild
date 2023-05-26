<?php 
  session_start();
  if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'transportador'  ){
    header('location: ../loginTransport/loginTransport.php?erro=true');
    exit;
  }
;?>

<?php
  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn,"SET NAMES 'utf8'");
  mysqli_query($conn,'SET character_set_connection=utf8');
  mysqli_query($conn,'SET character_set_client=utf8');
  mysqli_query($conn,'SET character_set_results=utf8');

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