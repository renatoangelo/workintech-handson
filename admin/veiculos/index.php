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
              <li class="breadcrumb-item active">Credits</li>
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
            <h3 class="card-title"><i class="fa-solid fa-house"></i>My Transactions</h3>
          </div>
          <!-- table start -->
          <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa-solid fa-list"></i> List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrapc table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Details</th>
                      <th>Slug</th>
                      <th>Data Cadastro</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $query_imoveis = "SELECT id, title, slug, created_at FROM real_estates";

                    $result_imoveis = $conn->prepare($query_imoveis);
                    $result_imoveis->execute();

                      if(($result_imoveis) and ($result_imoveis->rowCount() != 0)){

                      while($row_imoveis = $result_imoveis->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                      <td><?php echo $row_imoveis['id']; ?></td>
                      <td><?php echo $row_imoveis['title']; ?></td>
                      <td><?php echo $row_imoveis['slug']; ?></td>
                      <td><span class="tag tag-success"><?php echo $row_imoveis['created_at']; ?></span></td>
                      <td><a class="btn bg-gradient-info" href=<?php echo URLADMIN . "imoveis/edit.php?id=" . $row_imoveis['id']; ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> See Receipts</a></td>
                    </tr>
                    <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

          <!-- fim table -->
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
