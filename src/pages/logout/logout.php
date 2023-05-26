<?php 
  session_start();
  session_destroy();
  if($_SESSION['role'] == 'transportador') {
    header('Location: ../loginTransport/loginTransport.php');
  } else if($_SESSION['role'] == 'responsavel') {
    header('Location: ../login/login.php');
  }
?>

