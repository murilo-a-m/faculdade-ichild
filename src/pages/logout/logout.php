<?php 
  session_start();
  session_destroy();
  header('Location: ../home/home.php');
?>

