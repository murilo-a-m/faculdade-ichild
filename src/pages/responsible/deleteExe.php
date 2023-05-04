<?php
  session_start();
  if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
    header('location: ../login/login.php?erro=true');
    exit;
  }
?>

<?php
  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn,"SET NAMES 'utf8'");
  mysqli_query($conn,'SET character_set_connection=utf8');
  mysqli_query($conn,'SET character_set_client=utf8');
  mysqli_query($conn,'SET character_set_results=utf8');

  $responsavelId = $_SESSION['id'];

  $sqlDeleteDependentes = "DELETE FROM dependentes WHERE responsavelId = $responsavelId";
  $sqlDeleteResponsavel = "DELETE FROM responsaveis WHERE id = $responsavelId"
?>

<?php
  if ($result = mysqli_query($conn, $sqlDeleteDependentes)) {
    if ($result = mysqli_query($conn, $sqlDeleteResponsavel)) {
      header('location: ../home/home.php?result=success');
    }
  } else {
    header('location: ./update.php?result=error');
  }
  mysqli_close($conn);  
?>