<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="Workintech" content="Workintech Fotos" />
  <meta name="description" content="Galeria de Fotos Workintech" />
  <meta name="keywords" content="Feira da Empregabilidade WorkInTech" />
  <meta name="author" content="Workintech" />
  <meta name="URL" content="https://www.www.devinsider.com.br/workintech/" />
  <meta http-equiv="content-language" content="pt-br" />
  <meta name="robots" content="index, follow" />

  <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/fonts-icones.css">
  <link rel="shortcut icon" href="https://devinsider.com.br/workintech/images/favicon.png" type="image/ico" />

<!-- INICIA COMPARTILHAMENTO REDES E WHATS -->

<meta name="msapplication-TileImage" content="https://devinsider.com.br/workintech/images/icon2.png" />
    <meta property="og:image" content="https://devinsider.com.br/workintech/images/icon2.png">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:description" content="Fotos da WorkInTech - Geral">
    <meta property="og:url" content="https://devinsider.com.br/workintech/" >
    <meta property="og:site_name" content="Fotos da WorkInTech - Feira da Empregabilidade" >
    <meta property="og:title" content="Aproveite as Fotos da WorkInTech -  Feira de Empregabilidade" >


    <link rel="manifest" href="https://devinsider.com.br/workintech/images/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://devinsider.com.br/workintech/images/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://devinsider.com.br/workintech/images/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://devinsider.com.br/workintech/images/favicon.png">



  <!--Inicia o Light Box-->
  <link rel="stylesheet" href="lightbox/css/vlightbox1.css" type="text/css" />
  <link rel="stylesheet" href="lightbox/css/visuallightbox.css" type="text/css" media="screen" />

  <script src="lightbox/js/jquery.min.js" type="text/javascript"></script>
  <script src="lightbox/js/visuallightbox.js" type="text/javascript"></script>

  <script src="lightbox/js/thumbscript1.js" type="text/javascript"></script>
  <script src="lightbox/js/vlbdata1.js" type="text/javascript"></script>
  <!--Inicia o Light Box-->

  <title>Galeria de Fotos Workintech</title>

</head>

<body>

  <header class="main_header container" style="background-color: #4710b9;">
    <div class="content">

      <div class="main_header_logo">

        <a href="https://www.devinsider.com.br" title="Workintech">
          <img src="../images/logo-peq-color.png" alt="logo.png" title="Logo Workintech" />
        </a>

      </div>

    </div>
  </header>

  <main class="main_content container">

    <section class="section-seu-codigo container">

      <div class="content">

        <h1 class="section_title"><i class="icon icon-code"></i> Galeria Geral de Fotos Work In Tech</h1>

        <div class="box-artigo">

          <div id="vlightbox1">
            <?php
            for ($x = 1; $x <= 82; $x++) {
            ?>
              <a class="vlightbox1" id="lightbox-responsiva" style="max-width: 480px; max-height:240px; overflow:hidden;" href="galeria/geral/geral-<?= $x; ?>.jpg" title="Foto 1">
                <img src="galeria/tb-geral/tb-geral-<?= $x; ?>.jpg" alt="foto 1">
              </a>

            <?php
            }
            ?>

          </div><!--Fecha Lightbox-->

        </div><!--Box Artigo-->

        <div class="clear"></div>

        <div class="logo-footer">
          <a href="https://www.devinsider.com.br" title="Workintech">
            <img src="../images/logo-peq-color.png" alt="logo.png" title="Logo Workintech" />
          </a>
        </div>

        <div class="download-footer"><h1><a href="https://drive.google.com/drive/folders/18KViLsfTrOoMgd0XSMOsogOSt-akBL-E?usp=sharing" target="_blank">Ver fotos no Google Drive</a></h1></div>
      </div>
    </section><!--FECHA BOX HTML-->

  </main>

  <footer class="main_footer container" style="margin-top: 450px;">
    <div class="main_footer_copy">

      <p class="m-b-footer"> Loop Nerd - 2021, todos os direitos reservados.</p>
      <p class="by"><i class="icon icon-heart-3"></i>Desenvolvido por: loopnerd.com.br</p>

    </div>
  </footer>

  <!--<script src="js/jquerey.js"></script>-->
  <script src="js/script.js"></script>
</body>

</html>