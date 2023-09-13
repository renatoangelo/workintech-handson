<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
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
              <h1 class="m-0">WorkinTech - HandsOn</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../dashboard/index.php">Home</a></li>
                <li class="breadcrumb-item active">Cadastro de Alunos</li>
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
              <h3 class="card-title"> <i class="fa-solid fa-user"></i> Cadastre um Aluno</h3>
            </div>


            <?php
            $timezone = new DateTimeZone('America/Sao_Paulo');
            $data_agora = new DateTime('now', $timezone);
            $data_agora = $data_agora->format('Y-m-d H:i:s');

            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            var_dump($dados);
            echo $data_agora;



            if (!empty($dados['cadastrar'])) {
              $query_cadastro = "INSERT INTO cadastro (nome, ra, turma, oficina, notebook, termos, data_agora) VALUES (:nome, :ra, :turma, :oficina, :notebook, :termos, :data_agora)";
              
              $result_cadastro = $conn->prepare($query_cadastro);
              $result_cadastro->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
              $result_cadastro->bindParam(':ra', $dados['ra'], PDO::PARAM_STR);
              $result_cadastro->bindParam(':turma', $dados['turma'], PDO::PARAM_STR);
              $result_cadastro->bindParam(':oficina', $dados['oficina'], PDO::PARAM_STR);
              $result_cadastro->bindParam(':notebook', $dados['notebook'], PDO::PARAM_INT);
              $result_cadastro->bindParam(':termos', $dados['termos'], PDO::PARAM_INT);
              $result_cadastro->bindParam(':data_agora', $data_agora, PDO::PARAM_STR);
              
              if ($result_cadastro->execute()) {
                //$_SESSION['msg'] = "<p style='color: #32c330;text-align: center;font-weight: bold;'>Imóvel cadastrado com Sucesso!</p>";
                //header("Location: ../veiuclos/list.php");
                echo "DEU CERTO!";
              } else {
                //$_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>ERRO: Tente Novamente!</p>";
                echo "DEU ERRO!!!!";
              }
            } else {
              echo("Caiu no else");
            }

            ?>

            <!-- forms start -->
            <?php
            include("../../forms/form.php");
            ?>
            <!-- Forms End -->
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

    <?php include("../common/footer.php"); ?>