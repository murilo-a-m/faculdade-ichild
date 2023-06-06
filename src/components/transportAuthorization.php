<?php
    session_start();

    $expiracao = 21600;
    $inatividade_minima = 21600;

    if (isset($_SESSION['ultimo_acesso'])) {
        $tempo_atual = time();
        $tempo_inativo = $tempo_atual - $_SESSION['ultimo_acesso'];
        if ($tempo_inativo >= $inatividade_minima) {
            session_destroy();
             header('Location: /ichild/src/pages/login/login.php');
            exit;
        }
    }

    $_SESSION['ultimo_acesso'] = time();

  if (!isset($_SESSION['id']) || !$_SESSION['role'] == 'transportador'  ){
    header('location: ../loginTransport/loginTransport.php?erro=true');
    exit;
  }; 
?>
