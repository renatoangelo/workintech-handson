<?php include("head.php"); ?>

<body>

  <main>

    <header class="site-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12 d-flex flex-wrap">
            <p class="d-flex me-4 mb-0">
              <i class="bi-person custom-icon me-2"></i>
              <strong class="text-dark">Work in Tech Hands.On</strong>
            </p>
          </div>

        </div>
      </div>
    </header>

    <?php //include("menu.php"); ?>



    <section class="hero-section h-25">
      <div class="section-overlay"></div>

      <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

          <div class="col-12 mt-auto mb-5 text-center">
            <small>Capacitação Profissional Mão na Massa!</small>

            <h1 class="text-white mb-5"><img src="images/logo.png" /></h1>

          </div>

        </div>
      </div>

      <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
          <source src="video/pexels-2022395.mp4" type="video/mp4">

          Seu navegador não suporta video.
        </video>
      </div>
      <a name="form"></a>
    </section>



    <section class="about-section section-padding">
      <div class="container">
        <div class="row">
          <h4 class="text-white mb-4">Instruções de preenchimento</h4>
          <div class="instrucoes-container">
            <div class="instrucoes">
              Para realizar sua inscrição corretamente, fique atento às instruções
              <ol>
                <li>Preencha corretamente seu Nome e Sobrenome (nome Completo)</li>
                <li>Só é permitido uma inscrição por RA, então digite-o corretamente</li>
                <li>Para escolha da oficina, temos alguns pontos importântes
                  <ul>
                    <li>Os laboratórios são equipados com: Mesas com PCs + Mesas para Notebooks</li>
                    <li>Se você tem o seu Notebook, vc deve priorizar usar as Mesas para Notebooks<br>
                        para isto, escolha a opção [X] Possuo SIM um Notebook</li>
                    <li>Caso as vagas para Notebook tenham esgotado e a oficina ainda possua vagas em aberto,<br>
                        você poderá se inscrever, com a opção [X] Não possuo um Notebook</li>
                    <li>Priorize levar o seu equipamento, caso possua</li>
                  </ul>
                  <li>Existe um nível de pré-requisito para as oficinas
                    <ul>
                      <li>Para oficinas de programação exige-se Lógica de Programação I e II</li>
                      <li>Para a oficina de Python e Flutter, seus equipamentos precisam estar com as IDES, previamente<br>
                          Instaladas - Informe-se com o seu Representante de Turma</li>
                    </ul>
                    <li>Aproveite ao máximo este evento! Uma oportunidade única!</li>
                  </li>
                </li>
              </ol>
            </div>
          </div>


          <h2 class="text-white mb-4">Faça sua inscrição abaixo</h2>
        </div>

        <div class="row">
          <?php
          include("../forms/form.php");
          ?>
          <h4 class="text-white mb-4" style="margin-top: 40px;">Dúvidas sobre sua oficina? Confira o cronograma abaixo:</h4>
        </div>

        <?php
          include("tabela-inspira.php");
        ?>

      </div>
    </section>

  </main>


  <?php include("footer.php"); ?>