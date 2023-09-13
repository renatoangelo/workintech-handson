<?php include("head.php"); ?>

<body>

  <main>

    <header class="site-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12 d-flex flex-wrap">
            <p class="d-flex me-4 mb-0">
              <i class="bi-person custom-icon me-2"></i>
              <strong class="text-dark">Work in Tech - Feira de Empregabilidade</strong>
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
            <small>Feira de Empregabilidade</small>

            <h1 class="text-white mb-5"><img src="images/logo.png" /></h1>

            <a class="btn custom-btn smoothscroll" href="inscricao.php" target="_blank">Inscreva-se</a>
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
          <h2 class="text-white mb-4">Faça sua inscrição abaixo</h2>
        </div>

        <div class="row">
          <?php
            include("forms/form.php");
          ?>
        </div>
      
      </div>
    </section>
    
  </main>


  <?php include("footer.php"); ?>