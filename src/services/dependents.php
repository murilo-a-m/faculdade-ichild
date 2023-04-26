<?php 
  $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

    if (!$conn) {
      die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
    }

    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,'SET character_set_connection=utf8');
    mysqli_query($conn,'SET character_set_client=utf8');
    mysqli_query($conn,'SET character_set_results=utf8');
;?>