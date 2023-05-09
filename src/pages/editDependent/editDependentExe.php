<?php 
  session_start();
  if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
    header('location: ../login/login.php?erro=true');
    exit;
  }
;?>

<?php require '../../components/headerMenu.php';?>


      
<?php
  $nome    = $_POST['nome'];	
  $sobrenome     = $_POST['sobrenome'];
  $dataNascimento = $_POST['dataNascimento'];
  $documento = $_POST['documento'];
  $turno = $_POST['turno'];
  
  
  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn,"SET NAMES 'utf8'");
  mysqli_query($conn,'SET character_set_connection=utf8');
  mysqli_query($conn,'SET character_set_client=utf8');
  mysqli_query($conn,'SET character_set_results=utf8');

  $dependentId = '3';


  $sql = "UPDATE ichild.Dependentes
          SET nome = '$nome', sobrenome = '$sobrenome', dataNascimento= '$dataNascimento', documento = '$documento', turno = '$turno' 
          WHERE id = $dependentId";  
;?>

<?php
  if ($result = mysqli_query($conn, $sql)) {
    header('location: ./update.php?result=success');
  } else {
    header('location: ./update.php?result=error');
  }
;?>