<?php include("head.php"); ?>

<body>

  <main>

    <header class="site-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12 d-flex flex-wrap">
            <p class="d-flex me-4 mb-0">
              <i class="bi-person custom-icon me-2"></i>
              <strong class="text-dark">Work in Tech Hands.On - Capacitação Profissional</strong>
            </p>
          </div>

        </div>
      </div>
    </header>

    <?php include("menu.php"); ?>

    <section class="hero-section" id="section_1">
      <div class="section-overlay"></div>

      <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

          <div class="col-12 mt-auto mb-5 text-center">
            <small>Capacitação Profissional Mão na Massa</small>

            <h1 class="text-white mb-5"><img src="images/logo.png" /></h1>

            <a class="btn custom-btn smoothscroll" href="forms.php" target="_blank">Inscreva-se</a>
          </div>

          <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
            <div class="date-wrap">
              <h5 class="text-white">
                <i class="custom-icon bi-clock me-2"></i>
                19 e 20 de Setembro 2023
              </h5>
            </div>


            <div class="location-wrap mx-auto py-3 py-lg-0">
              <h5 class="text-white">
                <i class="custom-icon bi-geo-alt me-2"></i>
                UniCesumar
              </h5>
            </div>

            <div class="location-wrap mx-auto py-3 py-lg-0">
              <h5 class="text-white">
                <i class="custom-icon bi-clock me-2"></i>
                19h-22h30
              </h5>
            </div>

          </div>
        </div>
      </div>

      <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
          <source src="video/pexels-2022395.mp4" type="video/mp4">

          Seu navegador não suporta video.
        </video>
      </div>
    </section>


    <section class="about-section section-padding" id="section_2">
      <div class="container">
        <div class="row">
          <h2 class="text-white mb-4">Work in Tech Hands.On</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
            <div class="services-info">
              <p class="text-white">A WorkInTech - Hands.On é uma extensão da WorkInTech Feira da Empregabilidade que acontece na UniCesumar. O objevtivo principal é capacitar os alunos do curso de tecnologia para o mercado de trabalho. Através de oficianas direcionadas cada aluno tem a oportunidade de aprender na prática desenvolvendo assim habilidades do setor!
              </p>

              <h6 class="text-white mt-4">Vantagens do evento</h6>

              <p class="text-white">Uma oportunidade rica de se conectar com áreas de interesse e navegar entre os setores de tecnologia mais desejados pelos profissionais de TI em diversas áreas.</p>

              <h6 class="text-white mt-4">Venha Fazer Parte</h6>

              <p class="text-white">Participe desta incrível jornada e construa habilidades para se conectar há um futuro promissor. Sua big-opportunity para fazer networking e aprimorar suas skills.</p>
            </div>
          </div>

          <div class="col-lg-6 col-12 d-flex align-items-center">
            <div class="about-text-wrap">
              <img src="images/logo-roxo.png" class="about-image img-fluid">
            </div>
          </div>

        </div>

        <div style="margin-top: 50px;" class="row justify-content-center">
          <div class="unicesumar">
            <h2 class="text-white">Realização</h2>
            <div class="empresas-logo d-flex justify-content-center flex-wrap">
              <img src="images/empresas/unicesumar.jpg">
              <img src="images/empresas/rocketgirls.jpg">
              <img src="images/empresas/unidev.jpg">
            </div>
          </div>
        </div>

        <!-- <div style="margin-top: 50px;" class="row justify-content-center">
          <div class="unicesumar">
            <h2 class="text-white" style="text-align: center;">Fotos do Evento - Clique para acessar</h2>

            <div class="fotos-evento d-flex justify-content-center flex-wrap">
              <a href="fotos/geral.php" target="_blank"><img src="images/fotos-gerais.jpg"></a>
              <a href="fotos/linkedin.php" target="_blank"><img src="images/linkedin.jpg"></a>
            </div>
          </div>
        </div> -->

      </div>
    </section>

    <section class="artists-section section-padding" id="section_3">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center">
            <h2 class="mb-4">Palestrantes</h2>
          </div>

          <?php include("participantes.php"); ?>

        </div>
      </div>
    </section>

    <section class="schedule-section section-padding" id="section_4">
      <div class="container">

        <div class="row">

          <div class="col-12 text-center">
            <h3 class="text-white mb-4">Oficinas</h3>
            <?php include("tabela-inspira.php"); ?>
          </div>

        </div>
      </div>
    </section>

    <section class="about-section section-padding" id="section_5">
      <div class="container">
        
        <?php include("staff.php"); ?>

      </div>
    </section>


    <section class="contact-section section-padding" id="section_6">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-12 mx-auto">
            <h2 class="text-center mb-4">Ficou Interessado? Faça sua Inscrição</h2>

            <div class="alert alert-primary d-flex justify-content-center botao-inscrevase">
              <a href="inscricao.php" target="_blank" class="btn custom-btn mx-auto">Inscreva-se</a>
            </div>



          </div>
        </div>
    </section>
  </main>


  <?php include("footer.php"); ?>