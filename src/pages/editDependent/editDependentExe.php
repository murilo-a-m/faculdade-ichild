<?php
    require_once '../../database/connection.php';

    $responsavelId = $_SESSION['id'];

    $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
            FROM ichild.Dependentes
            WHERE responsavelId =$responsavelId
            ";
    <?php
    echo "<div>";
    if ($result = mysqli_query($conn, $sql)) {
      header('location: ../responsibleMenu/responsibleMenu.php');
    } else {
      echo "<p>&nbsp;Erro executando INSERT: " . mysqli_error($conn . "</p>");
    }
        echo "</div>";
    mysqli_close($conn);  
    ?>
   
    function Altera_Dados(){
        $retorno="";
        $conecta = DBConnect();
      
        if(isset($_POST["atualiza"])){        
            $nome = $_REQUEST['nome']; 
            echo $_REQUEST['nome'];
            $sobrenome= $_POST['sobrenome'];
            echo $_POST['sobrenome'];
            $dataNascimento = $_POST['dataNascimento'];  
            echo $_POST['dataNascimento'];     
            $documento = $_POST['documento'];
            echo $_POST['documento'];
            $turno = $_POST['turno'];
            $id = $_POST['id'];
          //$biografia = $_POST['biografia'];
            $sql = "UPDATE Dependentes ( nome, sobrenome, dataNascimento, documento, turno, responsavelId) 
              VALUES ('$nome','$sobrenome', '$dataNascimento', '$documento','$turno','$responsavelId')";?>
              $retorno = mysqli_query($conN,$query)or die ('Erro na consulta ::. '. mysqli_error($conecta));
           }
        DBClose($conn);
        return $retorno;
      }