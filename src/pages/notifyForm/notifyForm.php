<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Css Links -->
        <link rel="stylesheet" href="../../css/style.css" />
        <link rel="stylesheet" href="../../css/reset.css" />

        <!-- Bootstrap links -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous"
        />

        <!-- Favicon link -->
        <link
            rel="shortcut icon"
            href="../../img/favicon-ichild.png"
            type="image/x-icon"
        />

        <title>iChild</title>
    </head>
    <?php 
    session_start();
    if (!isset($_SESSION['id']) || $_SESSION['role'] != 'responsavel') {
        header('location: ../login/login.php?erro=true');
        exit;
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <?php require '../../components/headerMenu.php';?>

    <?php 
    $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

    if (!$conn) {
        die("<strong> Falha de conexão: </strong>" . mysqli_connect_error());
    }

    mysqli_query($conn, "SET NAMES 'utf8'");
    mysqli_query($conn, 'SET character_set_connection=utf8');
    mysqli_query($conn, 'SET character_set_client=utf8');
    mysqli_query($conn, 'SET character_set_results=utf8');

    $responsavelId = $_SESSION['id'];


    $sql = "SELECT * FROM Dependentes WHERE responsavelId = '$responsavelId'";

  
    $result = mysqli_query($conn, $sql);

 
    if (mysqli_num_rows($result) > 0) {
        echo '<main class="container__form container-fluid">';
        echo '<div class="col-md-8 mt-2">';
        echo '<label for="inputTurn" class="form-label">Dependentes</label>';
        echo '<select id="inputTurn" class="form-select" name="turno">';
        echo '<option selected>Escolher..</option>';


        while ($row = mysqli_fetch_assoc($result)) {
    
        $id = $row['id'];
        $nome = $row['nome'];

        echo "<option value='$id'>$nome</option>";
        }

        echo '</select>';
        echo '</div>';
        echo '<div class="mb-3">';
        echo '<label for="notifyForm" class="form-label">Digite sua mensagem</label>';
        echo '<textarea class="form-control" id="notifyForm" rows="3"></textarea>';
        echo '</div>';
        echo '</main>';
        
    }
    ?>
</html>