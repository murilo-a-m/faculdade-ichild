<?php
  session_start();
  if (!isset($_SESSION['id']) || $_SESSION['role'] != 'responsavel') {
      header('Location: /ichild/src/pages/login/login.php');
      echo "<script>alert('Você não tem permissão para acessar esta página!')</script>";
      exit;
  }
?>
