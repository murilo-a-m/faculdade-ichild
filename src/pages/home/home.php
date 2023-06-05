<!DOCTYPE html>
<html lang="pt-br">
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

    <!-- AOS link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <title>iChild</title>
  </head>
  <body>
    <?php require '../../components/header.php';?>

    <main class="container__main">
      <div class="main__banner background__style">
        <div class="main__banner-box container-md">
          <div class="main__banner-text">
            <p class="banner__paragraph">Agende com confiança</p>
            <p class="banner__title">Os pais aprovam e acompanham.</p>
          </div>
          <div class="main__banner-btn">
            <a href="../responsible/register.php" class="banner__registerBtn">
              <span>Cadastrar-se</span>
            </a>
            <a href="#about" class="banner__aboutBtn">
              <span>Saber mais</span>
            </a>
          </div>
        </div>
      </div>
      <div class="main__specs container-md">
        <div class="main__specs-item">
          <div class="item__icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-calendar-check-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"
              />
            </svg>
          </div>
          <p>Controle de agendamento</p>
        </div>
        <div class="main__specs-item">
          <div class="item__icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-person-vcard-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"
              />
            </svg>
          </div>
          <p>Cadastro de responsáveis</p>
        </div>
        <div class="main__specs-item">
          <div class="item__icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-shield-fill-check"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"
              />
            </svg>
          </div>
          <p>100% Seguro</p>
        </div>
        <div class="main__specs-item">
          <div class="item__icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-hand-thumbs-up-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"
              />
            </svg>
          </div>
          <p>Uso simples e intuitivo</p>
        </div>
      </div>
      <div id="about" class="main__about">
        <div class="main__about-box background__style">
          <img
            data-aos-duration="2000"
            data-aos="zoom-out"
            src="../../img/about-logo.png"
            alt="Logo iChild"
            class="img-fluid"
          />
          <div class="about__text">
            <p class="about__text-title">O que é o <span>iChild</span>?</p>
            <p class="about__text-paragraph">
              iChild foi desenvolvido para ajudar a controlar o transporte de crianças e manter os responsáveis informados sobre sua rotina escolar. Com o iChild, os responsáveis podem receber notificações de quando seus filhos embarcam e desembarcam do transporte escolar.
            </p>
            <a href="#services" class="about__text-link">Serviços ></a>
          </div>
        </div>
      </div>
      <div id="services" class="main__services">
        <p class="services__title">Serviços</p>
        <div id="services1" class="services__item-container">
          <div class="services__item-containermd container-md">
            <div class="services__item">
              <img
                data-aos-duration="2000"
                data-aos="fade-right"
                src="../../img/services-item1.png"
                alt=""
              />
              <div class="services__item-text">
                <p class="services__item-title">
                  Gestão de <span>Presença</span>
                </p>
                <p class="services__item-paragraph">
                  Auxiliar na gestão de presença de menores durante o transporte
                  escolar.
                </p>
                <a href="#services2" class="services__item-link">Próximo ></a>
              </div>
            </div>
          </div>
        </div>
        <div id="services2" class="services__item-container">
          <div class="services__item-containermd container-md">
            <div class="services__item">
              <img
                data-aos-duration="2000"
                data-aos="fade-left"
                src="../../img/services-item2.png"
                alt=""
              />
              <div class="services__item-text">
                <p class="services__item-title">
                  Controle de <span>Agenda</span>
                </p>
                <p class="services__item-paragraph">
                  Proporcionar controle do agendamento de embarque do menor de
                  idade.
                </p>
                <a href="#services3" class="services__item-link">Próximo ></a>
              </div>
            </div>
          </div>
        </div>
        <div id="services3" class="services__item-container">
          <div class="services__item-containermd container-md">
            <div class="services__item">
              <img
                data-aos-duration="2000"
                data-aos="fade-right"
                src="../../img/services-item3.png"
                alt=""
              />
              <div class="services__item-text">
                <p class="services__item-title">
                  Cadastre sua <span>Empresa</span>
                </p>
                <p class="services__item-paragraph">
                  Proporcionar controle do agendamento de embarque do menor de
                  idade.
                </p>
                <a href="" class="services__item-link"
                  >Começar agora ></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main__bannerTransport background__style">
        <div class="main__transport-box container-md">
          <div class="main__transport-contentHome">
            <img src="../../img/about-logo-transporteBusiness.png" alt="" class="transportBusiness__img">
            <div class="main__banner-btn">
            <a href="../registerTransport/registerTransport.php" class="banner__registerBtn">
              <span>Cadastrar-se</span>
            </a>
            <a href="../loginTransport/loginTransport.php" class="banner__aboutBtn">
              <span>Entrar na conta</span>
            </a>
          </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="container__foter" class="text-center text-lg-start text-dark">
      <section class="footer__section">
          <div class="d-flex align-items-center justify-content-center p-3 text-white gap-2">
            <a target="_blank" class="link" href="https://github.com/murilo-a-m/faculdade-ichild">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg></i></i>
            <a target="_blank" class="link" href="https://trello.com/b/clD6ibOn/ichild">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trello" viewBox="0 0 16 16">
                <path d="M14.1 0H1.903C.852 0 .002.85 0 1.9v12.19A1.902 1.902 0 0 0 1.902 16h12.199A1.902 1.902 0 0 0 16 14.09V1.9A1.902 1.902 0 0 0 14.1 0ZM7 11.367a.636.636 0 0 1-.64.633H3.593a.633.633 0 0 1-.63-.633V3.583c0-.348.281-.631.63-.633h2.765c.35.002.632.284.633.633L7 11.367Zm6.052-3.5a.633.633 0 0 1-.64.633h-2.78A.636.636 0 0 1 9 7.867V3.583a.636.636 0 0 1 .633-.633h2.778c.35.002.631.285.631.633l.01 4.284Z"/>
              </svg>
            </a>
          </div>
      </section>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="d-flex align-items-center text-uppercase fw-bold">iChild</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"/>
              <p class="mb-5">
                Realiza o registro de dependentes, permitindo os responsáveis acompanhar sua rotina escolar. 
              </p>
              <h6 class="d-flex align-items-center text-uppercase fw-bold">iChild business</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"/>
              <p>
                Permite o motorista registrar seu veículo e realizar o tranporte de dependentes. 
              </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold"><i class="bi bi-house-door-fill"></i> Home</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"/>
              <p>
                <a href="#!" class="text-dark">Ínicio</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Quem somos?</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Serviços</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Transporte</a>
              </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold"><i class="bi bi-github"></i> github</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"/>
              <p>
                <a href="#!" class="text-dark">Elvis Claudino</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Gabriel Fasolim</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Murilo Analiel</a>
              </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold"><i class="bi bi-linkedin"></i> Linkedin</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"/>
              <p>
                <a href="#!" class="text-dark">Elvis Claudino</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Gabriel Fasolim</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Murilo Analiel</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-3 copy">
        © 2023 Copyright:
        <a class="" href="#">iChild</a>
      </div>
    </footer>

    <!-- Script Navbar -->
    <script src="../../utils/navbar.js"></script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <!-- Script AOS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
