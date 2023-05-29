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
        require_once '../../database/connection.php';


        $responsavelId = $_SESSION['id'];

        $sql = "SELECT id, nome, sobrenome, dataNascimento, documento, turno
                FROM ichild.Dependentes
                WHERE responsavelId = $responsavelId
                ";
                
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    echo '<div class="dependente">';
                    echo '<div class="icon">';
                    echo'</div>';
                    echo"<div value=$row[id] id='DependentSubmit' class='dados'>";
                        echo"<h6 class='notify'></h6>";
                    
                }
            }
        }
</html>