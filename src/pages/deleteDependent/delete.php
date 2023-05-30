

<?php require '../../components/headerMenu.php';?>

<?php

    include_once '../../components/responsibleAuthorization.php';
    include_once '../../database/connection.php'

    $dependentId = $_GET['id'];

    $sqlSelect = "SELECT * FROM Dependentes where id=$dependentId";

    $result = $conn->query($sqlSelect);

    if($result -> num_rows > 0)
    {
        $sqlDelete = "DELETE FROM Dependentes WHERE id =$dependentId";
        $resultDelete = $conn->query($sqlDelete);
        header('location: http://localhost/ichild/src/pages/dependentPanel/dependentPanel.php');
    }
    else
    {
        header('location: ./update.php?result=error');
    }
