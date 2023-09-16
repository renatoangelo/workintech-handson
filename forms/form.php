<?php
  require_once '../forms/classes/oficinas.php';
  require_once '../forms/classes/cadastros.php';
  $oficinas_disponiveis = Oficina::get();

?>
<link rel="stylesheet" type="text/css" href="../landingpage/css/form.css" media="screen" />
<!-- form start -->
<!-- teste -->
<?php
      if(isset($_POST['cadastrar'])){
      try {
        $cadastro = Cadastro::create($_POST);
        if ($cadastro) {
          $_SESSION['msg'] = $cadastro;
        } else {
          $_SESSION['msg'] = '<div class="alert alert-danger" role="alert"> Erro ao se cadastrar na oficina! Tente novamente </div>';
        }
      } catch(Exception $e) {
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'. $e .'</div>';
      }
    }
  
?>

  

  <a name="form"></a>
  <form action="#form" method="post">
    <div class="card-body">
      <!-- row -->
      <?php    
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }    



      // $query_oficina = 'SELECT o.id_oficina, o.nome 
      // FROM oficinas o 
      // WHERE o.limite > (
      //                     SELECT count(*) 
      //                     FROM cadastro c 
      //                     WHERE c.oficina = o.id_oficina
      //                   )';
      // $oficinas_disponiveis = $conn->prepare($query_oficina);
      // $oficinas_disponiveis->execute();
      // $oficinas_disponiveis = $oficinas_disponiveis->fetchAll();
      ?>
      <div class="row">
        <section class="col-lg-6 connectedSortable">
          <div class="form-group text-white">
            <label for="exampleInputEmail1">Nome Completo: </label>
            <input type="text" class="form-control " id="nome" placeholder="Digite o seu nome" name="nome">
          </div>
        </section>

        <section class="col-lg-6 connectedSortable">
          <div class="form-group text-white">
            <label for="exampleInputEmail1" >RA: <i class="fa-solid fa-circle-info"></i></label>
            <input type="text" name="ra" class="form-control " id="ra" placeholder="Apenas Números" required minlength="9" maxlength="9" value="">
            <span class="text-sm text-danger">Utilize apenas números</span>
          </div>
        </section>

        <div class="form-group mt-12 col-md-12 text-white">
          <label for="estateType">Turma</label>
          <select name="turma" id="turma" class="form-control ">
            <option value="adsis2a">ADSIS2-N-A</option>
            <option value="adsis2b">ADSIS2-N-B</option>
            <option value="adsis2c">ADSIS2-N-C</option>

            <option value="adsis4a">ADSIS4S-N-A</option>
            <option value="adsis6a">ADSIS6S-N-A</option>

            <option value="esoft2a">ESOFT2S-N-A</option>
            <option value="esoft2b">ESOFT2S-N-B</option>
            <option value="esoft2c">ESOFT2S-N-C</option>
            <option value="esoft2d">ESOFT2S-N-D</option>
            <option value="esoft4a">ESOFT4S-N-A</option>
            <option value="esoft4b">ESOFT4S-N-B</option>
            <option value="esoft4c">ESOFT4S-N-C</option>
            <option value="esoft6a">ESOFT6S-N-A</option>
            <option value="esoft8a">ESOFT8S-N-A</option>
          </select>
        </div>

        <div class="form-group mt-12 col-md-12 text-white mt-4">
          <label for="estateType">Oficina</label>
          <select name="oficina" id="oficina" class="form-control ">
            <?php
              foreach ($oficinas_disponiveis as $oficina) { 
            ?>
              <option value="<?=$oficina['id_oficina'];?>"><?=$oficina['nome'];?></option>
            <?php 
            }
            ?>
          </select>
        </div>

        <div class="form-group mt-12 col-md-12 text-white mt-2">
          
          <div class="form-check"  id="divRadio1"  onclick="selectRadio('notebook', '1')">
            <input class="form-check-input" type="radio" name="notebook" id="notebook" value='1'>
            <label class="form-check-label" for="flexRadioDefault1">
              Possuo <b>SIM</b> um Notebook
            </label>
          </div>

          <div class="form-check"  id="divRadio2" onclick="selectRadio('notebook', '2')"> 
            <input class="form-check-input" type="radio" name="notebook" id="notebook2" value='2' checked>
            <label class="form-check-label" for="flexRadioDefault2">
              <b>Não </b>possuo um Notebook
            </label>
          </div>
        </div>

        <div class="form-group mt-12 col-md-12 text-white d-flex justify-content-center mb-4" onclick="">
          <div class="form-check" >
            <input class="form-check-input" type="checkbox" value="1" id="termos" name="termos" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Aceito os termos do Evento
            </label>
          </div>
        </div>

        <section class="col-lg-12 staff-member connectedSortable">
          <div class="row  w-25">
            <button type="submit" name="cadastrar" value="cadastrar" class="btn btn-primary btn-block">Realizar Inscrição <i class="fa-solid fa-right-to-bracket"></i></button>
          </div>

        </section>
      </div>
      <!-- /row -->
    </div>
    <!-- /.card-body -->
  </form>
  <script src="../landingpage/js/form.js"></script>
