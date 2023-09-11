<?php
include("../include/default.php");

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

if(!empty($dados['trade'])) {
  $query_trade = "UPDATE balance SET bal_kwh = (bal_kwh - :valueTransacted),
  bal_coins = (bal_coins + :newValue)
  WHERE user_id = 1";

  $result_trade = $conn->prepare($query_trade);
  $result_trade->bindParam(':valueTransacted', $dados['valueTransacted'], PDO::PARAM_INT);
  $result_trade->bindParam(':newValue', $dados['newValue'], PDO::PARAM_INT);

  if ($result_trade->execute()) {
  } else {
 }

} else {

}
?>

<style>
  .submit {
    width: 40%;
    justify-content: center;
    height: 56px;
    flex-shrink: 0;
    border-radius: 6px;
    font-weight: 600;
    background: #2ACD8B;
    color: white;
    border: none;
  }

  .inputs {
    background-color: #1B0C30;
    border-radius: 6px;
    height: 56px;
    width: 100%;
    margin: 0;
    color: #fff;
    border: none;
    padding: 15px;
  }

  .input-select {
    background-color: #1B0C30;
    border-radius: 6px;
    height: 56px;
    width: 100%;
    margin: 0;
    color: #fff;
    border: none;
    padding: 15px;
  }
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
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
              <li class="breadcrumb-item active">Transactions</li>
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
          <!-- table start -->
          <!-- /.row -->
            <div class="card">
                <div class="card-tools">
                <form method="POST" action="" class="form-post" >

                <div class="input-group input-group-sm" style="width: 100%; margin: 12px;">
                    <label for="trades">Choose an option: </label>

                    <select class="input-select" name="trades" id="trades">
                        <option value="0">kWh -> EC</option>
                        <option value="1">EC -> Euro</option>
                        <option value="2">Euro -> EC</option>
                    </select>

                    <div class="m-2 flex display-flex">    
                        <input type="text" name="valueTransacted"  id="valueTransacted" class="form-control inputs" placeholder="Type desired amount">
                    </div>
                    <div class="m-2">
                        <input readonly type="text" name="newValue" id="newValue" class="form-control inputs">
                    </div>
                </div>
                <div class="input-group-append m-3">
                    <button type="submit" class="submit" value="trade" name="trade" class="btn btn-default">
                    Trade
                    </button>
                </div>
                </form>
                <!-- /.content -->
            </div>

  <?php  include("../common/footer.php"); ?>

  <script>
        document.getElementById("valueTransacted").addEventListener("input", function(){
        document.getElementById("newValue").value = parseInt(this.value) * 1000;
    });
  </script>