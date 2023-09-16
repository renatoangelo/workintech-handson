<!-- <h5 class="alert d-flex justify-content-center titulo_palestra">Mentores e Empresas</h5> -->
<div class="row">

<?php
$participante = array();

$participante[0]["nome"] = "Leandro Ribeiro";
$participante[0]["titulo"] = "Tecnólogo em Redes de Computadores, CEO Bitsafe<br>Especialista em Cibersecurity";
$participante[0]["linkedin"] = "https://www.linkedin.com/in/leandro-ribeiro-andrade-16b09a30";
$participante[0]["foto"] = "leandro.jpg";


$participante[1]["nome"] = "Frank Aguilieri";
$participante[1]["titulo"] = "Diretor de TI e Segurança da Informação, Ethical Hacker e Tech Lead";
$participante[1]["linkedin"] = "https://www.linkedin.com/in/frankaguilieri/";
$participante[1]["foto"] = "frank.jpg";


$participante[2]["nome"] = "Renato Angelo";
$participante[2]["titulo"] = "Developer, Empresário, CMO - Chief Marketing Officer, Consultor Empresarial";
$participante[2]["linkedin"] = "https://www.linkedin.com/in/renatoangelo/";
$participante[2]["foto"] = "renato.jpg";

$participante[3]["nome"] = "Gustavo Luiz Fernandes";
$participante[3]["titulo"] = "Programador Mobile Flutter na Vivaworks <br>Bacharel em Ciência da Computação (UEM)";
$participante[3]["linkedin"] = "https://www.linkedin.com/in/93luiz";
$participante[3]["foto"] = "gustavo.jpg";

$participante[4]["nome"] = "Alexandre Lozano";
$participante[4]["titulo"] = "Programador em python <br>Graduando de Engenharia de Software";
$participante[4]["linkedin"] = "";
$participante[4]["foto"] = "alexandre.jpg";

$participante[5]["nome"] = "Thiago Bussola";
$participante[5]["titulo"] = "Desenvolvedor Back-end Sênior, Especialista em Node.js e em Liderança Técnica";
$participante[5]["linkedin"] = "https://www.linkedin.com/in/thiago-bussola-66643416b";
$participante[5]["foto"] = "bussola.jpg";


$participante[6]["nome"] = "Mateus Poi";
$participante[6]["titulo"] = "Site Reliability Engineering na Gazin Tech <br>Bacharel em Engenharia de Software";
$participante[6]["linkedin"] = "https://www.linkedin.com/in/mateuscppoi";
$participante[6]["foto"] = "mateus.jpg";


$participante[7]["nome"] = "Aparecido Vilela";
$participante[7]["titulo"] = "DBA - Banco de dados Oracle/Sql Server, <br>Engenheiro de Dados - BI com projetos no (Sicoob, Cresol, FlexoPrint, Atak)";
$participante[7]["linkedin"] = "https://www.linkedin.com/in/aparecidovilelajunior-22289a27";
$participante[7]["foto"] = "cidao.jpg";


$participante[8]["nome"] = "Thyago Borges";
$participante[8]["titulo"] = "Mestre em Ciência da Computação, Especialista em Gestão Empresarial,<br>Especialista em Gestão de Projetos em TI";
$participante[8]["linkedin"] = "https://www.linkedin.com/in/thyago-borges-505b1a8";
$participante[8]["foto"] = "thyago.jpg";


$participante[9]["nome"] = "Jeferson Cardoso";
$participante[9]["titulo"] = "CEO da Intalenti, Presidente da ABRH Noroeste(Associação Brasileira de Recursos Humanos) <br>e Diretor da SBM(Software By Maringa";
$participante[9]["linkedin"] = "https://www.linkedin.com/in/jeferson-cardoso-a9270a143";
$participante[9]["foto"] = "jeferson.jpg";


$participante[10]["nome"] = "Leonardo Ribeiro";
$participante[10]["titulo"] = "Tecnólogo em Análise e Desenvolvimento de Sistemas, <br>Desenvolvedor Full Stack Sênior";
$participante[10]["linkedin"] = "https://www.linkedin.com/in/leonardo-ribeiro-de-andrade";
$participante[10]["foto"] = "leonardo.jpg";

foreach ($participante as $key => $value) {
?>
    <!--PALESTRANTE #1 -->
    <div class="col-lg-3 col-12 mb-2">
      <div class="card bg-verde h-100">
        <img src="images/palestrantes/<?=$value['foto'];?>" class="card-img-top">
        <div class="card-body card-body-participante">
          <h5 class="card-title"><?=$value['nome'];?></h5>
          <p class="text-azul"><?=$value['titulo'];?></p>
          <a class="link-primary" href="<?=$value['linkedin'];?>" target="_blank"><i class="bi bi-linkedin"></i>LinkedIn</a>
        </div>
      </div>
    </div>
    <!-- FIM PALESTRANTE -->
  <?php
}
  ?>


  </div>