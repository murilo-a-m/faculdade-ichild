<?php 
  session_start();
  if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
    header('location: ../login/login.php?erro=true');
    exit;
  }
;?>

<?php require '../../components/headerMenu.php';?>


      
<?php


  if(!empty($_GET['id']));


  

  $sqlSelect = "SELECT * FROM Dependentes where id=$id";

  $result = $conn->query($sqlSelect);

  if($result -> num_rows > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      $nome    = $_row['nome'];	
      $sobrenome     = $_row['sobrenome'];
      $dataNascimento = $_row['dataNascimento'];
      $documento = $_row['documento'];
      $turno = $_row['turno'];
      
    }
  }
  else
  {
    header('location: ./update.php?result=error');
  }



  
  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

  if (!$conn) {
    die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
  }

  mysqli_query($conn,"SET NAMES 'utf8'");
  mysqli_query($conn,'SET character_set_connection=utf8');
  mysqli_query($conn,'SET character_set_client=utf8');
  mysqli_query($conn,'SET character_set_results=utf8');


  $sql = "UPDATE ichild.Dependentes
          SET nome = '$nome', sobrenome = '$sobrenome', dataNascimento= '$dataNascimento', documento = '$documento', turno = '$turno' 
          WHERE id = $dependentId";  
;?>

