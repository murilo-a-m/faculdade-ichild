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
      <li><a href="../pages/responsibleMenu/responsibleMenu.php">MENU</a></li>
      <li><a href="">DEPENDENTES</a></li>
      <li><a href="">ADICIONAR DEPENDENTES</a></li>
      <li><a href="">LOG DO DIA</a></li>
      <li><a href="">AGENDA</a></li>
    </ul>
  </div>
</aside>

<?php 
      $conn = mysqli_connect("localhost:3306", 'dev', 'dev', 'ichild');

      mysqli_query($conn,"SET NAMES 'utf8'");
      mysqli_query($conn,'SET character_set_connection=utf8');
      mysqli_query($conn,'SET character_set_client=utf8');
      mysqli_query($conn,'SET character_set_results=utf8');

      $responsavelId = $_SESSION['id'];

      $sql = "SELECT id, nome, sobrenome
              FROM ichild.Responsaveis
              WHERE id =$responsavelId";

      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            $nome = $row['nome'];
            $sobrenome = $row['sobrenome'];
          }
        }
      }   
    ;?>

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
      <img src="../../img/profile.png" alt="" class="profile__pic img_fluid" />
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
    <img src="../../img/profile.png" alt="" class="profile-img" />
  </div>
</header>

<!-- Script Navbar -->
<script src="../../utils/navbar-menu.js"></script>