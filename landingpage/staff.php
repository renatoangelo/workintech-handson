
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
    $staff[8]["foto"] = "matheusn.jpg";

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