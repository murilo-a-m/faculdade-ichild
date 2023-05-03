<!-- Css Links -->
<link rel="stylesheet" href="/src/css/style.css"/>
<link rel="stylesheet" href="/src/css/reset.css"/>

<header id="home" class="container__header">
  <div class="container__header-content container-fluid">
    <div class="header__logo">
      <a href="/ichild/src/pages/home">
        <img
          src="../../img/logo-ichild.png"
          alt="Logo do iChild"
          class="header__image"
          width="130px"
        />
      </a>
    </div>
    <div class="header__nav">
      <ul class="navbar">
        <li><a href="/ichild/src/pages/home" class="active">Home</a></li>
        <li><a href="/ichild/src/pages/home#about">Quem somos</a></li>
        <li><a href="/ichild/src/pages/home#services">Serviços</a></li>
        <li><a href="/ichild/src/pages/home#contact">Contato</a></li>
      </ul>
    </div>
    <div class="header__button">
      <a href="/ichild/src/pages/login/login.php" class="header__btn">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="18"
          height="18"
          fill="currentColor"
          class="bi bi-person-fill header__button-icon"
          viewBox="0 0 16 16"
        >
          <path
            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
          />
        </svg>
        <span>Minha conta</span>
      </a>
      <div id="nav-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="30"
          fill="currentColor"
          class="bi bi-list"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
          />
        </svg>
      </div>
    </div>
  </div>
</header>

<!-- Script Navbar -->
<script src="../utils/navbar.js"></script>