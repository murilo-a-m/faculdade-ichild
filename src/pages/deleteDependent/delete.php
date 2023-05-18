<?php 
    session_start();
    if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'responsavel'  ){
        header('location: ../login/login.php?erro=true');
        exit;
    }
;?>

<?php require '../../components/headerMenu.php';?>



<?php
    $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

    if (!$conn) {
        die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
    }

    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,'SET character_set_connection=utf8');
    mysqli_query($conn,'SET character_set_client=utf8');
    mysqli_query($conn,'SET character_set_results=utf8');


    if(!empty($_GET['id']));

    include_once('connection.php');

    $dependentId = $_GET['id'];

    $sqlSelect = "SELECT * FROM Dependentes where id=$dependentId";

    $result = $conn->query($sqlSelect);

    if($result -> num_rows > 0)
    {
        $sqlDelete = "DELETE FROM Dependentes WHERE id =$dependentId";
        $resultDelete = $conn->query($sqlDelete);
    }
    else
    {
        header('location: ./update.php?result=error');
    }
