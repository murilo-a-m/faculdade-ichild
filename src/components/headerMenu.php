<!-- Css Links -->
<link rel="stylesheet" href="../../css/style.css" />
<link rel="stylesheet" href="../../css/reset.css" />

<aside class="aside__bar">
  <div id="menu__bar">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="30"
      height="30"
      fill="currentColor"
      class="bi bi-x menu__bar-icon"
      viewBox="0 0 16 16"
    >
      <path
        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
      />
    </svg>
    <ul>
      <li><a href="/ichild/src/pages/responsibleMenu/responsibleMenu.php">MENU</a></li>
      <li><a href="/ichild/src/pages/dependentPanel/dependentPanel.php">DEPENDENTES</a></li>
      <li><a href="/ichild/src/pages/registerDependent/registerDependent.php">ADICIONAR DEPENDENTES</a></li>
      <li><a href="#">LOG DO DIA</a></li>
      <li><a href="/ichild/src/pages/schedule/schedule.php">AGENDA</a></li>
    </ul>
  </div>
</aside>

<?php 
  $responsavelId = $_SESSION['id'];
  $nome = $_SESSION['nome'];
  $sobrenome = $_SESSION['sobrenome'];
  $imagem = $_SESSION['imagem'];
?>

<aside class="aside__bar-profile">
  <div id="profile__bar">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="30"
          fill="currentColor"
          class="bi bi-x profile__info-icon"
          viewBox="0 0 16 16"
        >
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
          />
      </svg>
    <div class="profile__info">
      <img src="data:image/jpeg;base64,<?php echo $_SESSION['imagem']; ?>" alt="" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
      <p class="profile__name"><?php echo ("$nome $sobrenome") ?></p>
    </div>
    <div class="profile__division"></div>
    <div class="profile__options">
      <ul>
        <li><a href="../../pages/responsible/update.php" >MEU PERFIL</a></li>
        <li><button><a href="../logout/logout.php" >SAIR</a></button></li>
      </ul>
    </div>
  </div>
</aside>

<header class="container__header-app">
  <div class="app__nav">
    <img src="../../img/navbarIcon.png" alt="" id="app__nav-icon" />
    <img src="../../img/favicon-ichild.png" alt="" class="logo-img" />
  </div>
  <div class="app__nav-profile">
    <img src="data:image/jpeg;base64,<?php echo $_SESSION['imagem']; ?>" alt="" class="profile-img rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
  </div>
</header>

<!-- Script Navbar -->
<script src="../../utils/navbar-menu.js"></script>