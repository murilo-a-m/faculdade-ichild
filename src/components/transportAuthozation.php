<?php
  session_start();
  if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'transportador'  ){
    header('location: ../loginTransport/loginTransport.php?erro=true');
    exit;
  }; 
?>