<?php
include("../include/default.php");
?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include("../common/navbar.php"); ?>

<?php include("../common/sidebar.php"); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SunCredit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard/index.php">Home</a></li>
              <li class="breadcrumb-item active">Veiculos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-primary">
          <!-- .card-header -->
          <div class="card-header">
            <h3 class="card-title"><i class="fa-solid fa-house"></i> Cadastre um Veiculo</h3>
          </div>


          <?php
          $timezone = new DateTimeZone('America/Sao_Paulo');
          $data_agora = new DateTime('now', $timezone);
          $data_agora = $data_agora->format('Y-m-d H:i:s');

          $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
          //var_dump($dados);

          if(!empty($dados['cadastrar'])) {
            $query_imovel = "INSERT INTO real_estates (id, user_id, title, slug, type, transaction_type, fase, created_at, updated_at)
                              VALUES ('', :user_id, :titulo, :slug, :tipoImovel, :finalidade, :fase, :data_agora, :data_agora2)";
            $result_imovel = $conn->prepare($query_imovel);
            $result_imovel->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_STR);
            $result_imovel->bindParam(':titulo', $dados['titulo'], PDO::PARAM_STR);
            $result_imovel->bindParam(':slug', $dados['slug'], PDO::PARAM_STR);
            $result_imovel->bindParam(':tipoImovel', $dados['tipoImovel'], PDO::PARAM_STR);
            $result_imovel->bindParam(':finalidade', $dados['finalidade'], PDO::PARAM_INT);
            $result_imovel->bindParam(':fase', $dados['fase'], PDO::PARAM_INT);
            $result_imovel->bindParam(':data_agora', $data_agora, PDO::PARAM_STR);
            $result_imovel->bindParam(':data_agora2', $data_agora, PDO::PARAM_STR);
            
            if ($result_imovel->execute()) {
              $_SESSION['msg'] = "<p style='color: #32c330;text-align: center;font-weight: bold;'>Imóvel cadastrado com Sucesso!</p>";
              header("Location: ../veiuclos/list.php");
        
            } else {
              $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>ERRO: Tente Novamente!</p>"; 
            }

          } else {

          }
          ?>

          <!-- form start -->

          <form action="" method="post">
            <div class="card-body">
              <!-- row -->
              <?php
            if (isset($_SESSION['msg'])) {
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
          ?>
              <div class="row">
                <section class="col-lg-6 connectedSortable">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Insira o Título do Imóvel aqui" name="titulo">
                  </div>
                </section>

                <section class="col-lg-6 connectedSortable">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug <i class="fa-solid fa-circle-info"></i></label>
                    <input
                    type="text" 
                    name="slug"
                    class="form-control " 
                    id="slug"
                    placeholder="Exemplo: imóvel-maringa-8-quartos"
                    required
                    minlength="5"
                    maxlength="100"
                    value="" >
                    <span class="text-sm text-primary">Não utilize acento(s) e espaços</span>
                  </div>
                </section>


                <div class="form-group mt-4 col-md-4">
                  <label for="reason">Finalidade:</label>
                  <select name="finalidade" id="reason" class="form-control ">
                      <option value="0"  selected >Residencial</option>
                      <option value="1" >Comercial</option>
                      <option value="2" >industrial</option>
                  </select>
                </div>

                <div class="form-group mt-4 col-md-4">
                    <label for="estateType">Tipo de imóvel:</label>
                    <select name="tipoImovel" id="estateType" class="form-control ">
                        <option value="apartamento" >Apartamento</option>
                        <option value="casa" >Casa</option>
                        <option value="chacara" >Chácara</option>
                        <option value="terreno" >Terreno</option>
                        <option value="kitnet" >Kitnet</option>
                        <option value="flat" >Flat</option>
                        <option value="lancamento" >Lançamento</option>
                        <option value="empreendimento" >Empreendimento</option>
                        <option value="comercial" >Comercial</option>
                        <option value="industrial" >Industrial</option>
                    </select>
                </div>

                <div class="for-group mt-4 col-md-2">
                    <label for="">Fase</label>
                    <select name="fase" id="faseRealEstate" class="form-control ">
                        <option value="0" >Pronto</option>
                        <option value="1" >Em construção</option>
                    </select>
                </div>

                <section class="col-lg-12 connectedSortable">
                  <div class="row">
                    <button type="submit" name="cadastrar" value="cadastrar" class="btn btn-primary btn-block">Cadastrar <i class="fa-solid fa-right-to-bracket"></i></button>
                  </div>
                  
                </section>
              </div>
              <!-- /row -->
            </div>
            <!-- /.card-body -->
          </form>
    </div>
        <!-- Main row -->

        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- 
              LADO ESQUERDO
              CONTEÚDO VAI AQUI
            -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- 
              LADO DIREITO
              CONTEÚDO VAI AQUI
            -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php  include("../common/footer.php"); ?>
