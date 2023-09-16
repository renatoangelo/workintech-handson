<!-- <h5 class="alert d-flex justify-content-center titulo_palestra">Mentores e Empresas</h5> -->
<div class="row">

<?php
$participante = array();

$participante[0]["nome"] = "Leandro Ribeiro";
$participante[0]["titulo"] = "";
$participante[0]["linkedin"] = "#";
$participante[0]["foto"] = "";


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
$participante[3]["linkedin"] = "#";
$participante[3]["foto"] = "gustavo.jpg";

$participante[4]["nome"] = "Alexandre Lozano";
$participante[4]["titulo"] = "Programador em python <br>Graduando de Engenharia de Software";
$participante[4]["linkedin"] = "#";
$participante[4]["foto"] = "alexandre.jpg";

$participante[5]["nome"] = "Thiago Bussola";
$participante[5]["titulo"] = "Desenvolvedor Back-end Sênior, Especialista em Node.js e em Liderança Técnica";
$participante[5]["linkedin"] = "#";
$participante[5]["foto"] = "bussola.jpg";


$participante[6]["nome"] = "Mateus Poi";
$participante[6]["titulo"] = "Site Reliability Engineering na Gazin Tech <br>Bacharel em Engenharia de Software";
$participante[6]["linkedin"] = "#";
$participante[6]["foto"] = "mateus.jpg";


$participante[7]["nome"] = "Aparecido Vilela";
$participante[7]["titulo"] = "DBA - Banco de dados Oracle/Sql Server, <br>Engenheiro de Dados - BI com projetos no (Sicoob, Cresol, FlexoPrint, Atak)";
$participante[7]["linkedin"] = "#";
$participante[7]["foto"] = "cidao.jpg";


$participante[8]["nome"] = "Thyago Borges";
$participante[8]["titulo"] = "Mestre em Ciência da Computação, Especialista em Gestão Empresarial,<br>Especialista em Gestão de Projetos em TI";
$participante[8]["linkedin"] = "#";
$participante[8]["foto"] = "thyago.jpg";


$participante[9]["nome"] = "Jeferson Cardoso";
$participante[9]["titulo"] = "";
$participante[9]["linkedin"] = "#";
$participante[9]["foto"] = "";


$participante[10]["nome"] = "Leonardo Ribeiro";
$participante[10]["titulo"] = "";
$participante[10]["linkedin"] = "#";
$participante[10]["foto"] = "";

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