<section class="about-section section-padding" id="section_4">
  <div class="container">
    <h2 class="text-white staff-titulo">STAFF / Organização</h2>

    <div class="staff-container flex-wrap">

    <?php
    $staff = array();
    
    $staff[0]["nome"] = "Karen <br>Reis";
    $staff[0]["turma"] = "ESOFT-6";
    $staff[0]["foto"] = "karen.jpg";

    $staff[1]["nome"] = "Renato <br>Angelo";
    $staff[1]["turma"] = "ESOFT-4C";
    $staff[1]["foto"] = "renato.jpg";

    $staff[2]["nome"] = "Débora <br>Reis";
    $staff[2]["turma"] = "ESOFT-2B";
    $staff[2]["foto"] = "debora.jpg";

    $staff[3]["nome"] = "Misael <br>Correia";
    $staff[3]["turma"] = "ESOFT-2D";
    $staff[3]["foto"] = "misael.jpg";

    $staff[4]["nome"] = "Akio <br>Matera";
    $staff[4]["turma"] = "ESOFT-6";
    $staff[4]["foto"] = "akio.jpg";

    $staff[5]["nome"] = "Joao <br>Polloni";
    $staff[5]["turma"] = "ESOFT-6";
    $staff[5]["foto"] = "joaopolloni.jpg";

    $staff[6]["nome"] = "Luigi <br>Capoia";
    $staff[6]["turma"] = "ESOFT-6";
    $staff[6]["foto"] = "luigi.jpg";

    $staff[7]["nome"] = "Pedro <br>Lomba";
    $staff[7]["turma"] = "ESOFT-4S";
    $staff[7]["foto"] = "pedrolomba.jpg";

    $staff[8]["nome"] = "Matheus <br>Nanuncio ";
    $staff[8]["turma"] = "ESOFT-2S";
    $staff[8]["foto"] = "staff.jpg";

    $staff[9]["nome"] = "Alexandre <br>Lozano";
    $staff[9]["turma"] = "ESOFT-2S";
    $staff[9]["foto"] = "alexandre.jpg";

    $staff[10]["nome"] = "Eduardo <br>Aguiar";
    $staff[10]["turma"] = "ADS-2S";
    $staff[10]["foto"] = "eduardo.jpg";

    $staff[11]["nome"] = "Matheus de <br>Albuquerque";
    $staff[11]["turma"] = "ADS-2S";
    $staff[11]["foto"] = "matheusalbuquerque.jpg";

    $staff[12]["nome"] = "Rhuan <br>Gabriel";
    $staff[12]["turma"] = "ADS-2S";
    $staff[12]["foto"] = "rhuan.jpg";

    $staff[13]["nome"] = "Pedro <br>Afonso";
    $staff[13]["turma"] = "ESOFT-4S";
    $staff[13]["foto"] = "pedro.jpg";

    ?>

    <?php
      foreach ($staff as $key => $value) {
    ?>

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/<?=$value["foto"];?>" alt="Ana Elisa Tubino">
        </div>
        <div class="staff-info">
          <h3><?=$value["nome"];?> </h3>
          <p><?=$value["turma"];?></p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <?php
      }
      ?>



  </div>
</section>


<?php

/*
      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/antonio.jpg" alt="Antonio C Prestes">
        </div>
        <div class="staff-info">
          <h3>Antonio C Prestes</h3>
          <p>Cordenador dos<br> Cursos de TI</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/debora.jpg" alt="Débora Reis">
        </div>
        <div class="staff-info">
          <h3>Débora Reis</h3>
          <p>ESOFT-1</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/matheus.jpg" alt="Matheus de Albuquerque">
        </div>
        <div class="staff-info">
          <h3>Matheus de<br> Albuquerque</h3>
          <p>ADS-1</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/polloni.jpg" alt="João Polloni ">
        </div>
        <div class="staff-info">
          <h3>João Polloni</h3>
          <p>ESOFT-5</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/josemiguel.jpg" alt="José Miguel ">
        </div>
        <div class="staff-info">
          <h3>José Miguel</h3>
          <p>ESOFT-3</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->


      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/palestrantes/renato.jpg" alt="Renato Angelo">
        </div>
        <div class="staff-info">
          <h3>Renato Angelo</h3>
          <p>ESOFT-3</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/seifert.jpg" alt="Vinícius Seifert ">
        </div>
        <div class="staff-info">
          <h3>Vinícius Seifert</h3>
          <p>ESOFT-3</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/lozano.jpg" alt="Alexandre Lozano ">
        </div>
        <div class="staff-info">
          <h3>Alexandre Lozano</h3>
          <p>ESOFT-1</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->

      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/ary.jpg" alt="Aryana Bandeira">
        </div>
        <div class="staff-info">
          <h3>Aryana Bandeira</h3>
          <p>ESOFT-7</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->


      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/palestrantes/tiago.jpg" alt="Tiago Freire">
        </div>
        <div class="staff-info">
          <h3>Tiago Freire</h3>
          <p>ADS-5</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->


      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/joao.jpg" alt="João Pedro Y T Vieira">
        </div>
        <div class="staff-info">
          <h3>João Pedro Y <br>T Vieira</h3>
          <p>ESOFT-5</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->


      <div class="staff-member">
        <div class="staff-photo">
          <img src="images/staff/pedro.jpg" alt="Pedro Sena">
        </div>
        <div class="staff-info">
          <h3>Pedro Sena</h3>
          <p>ESOFT-3</p>
        </div>
      </div>
      <!-- Repita o código acima para cada membro do staff -->
    </div>
    */