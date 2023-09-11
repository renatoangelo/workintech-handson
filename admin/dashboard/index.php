<?php
session_start();
ob_start();
include_once '../include/connection.php';
include_once '../include/verifica.php';
include_once '../common/header.php';
?>
</head>
<style>
  .dark-mode {
    background-color: #0E031E !important;
  }

  .dark-mode .content-wrapper {
    background-color: #0E031E !important;
  }

  .submit {
    width: 100%;
    height: 56px;
    flex-shrink: 0;
    border-radius: 6px;
    font-weight: 600;
    background: #2ACD8B;
    color: white;
    border: none;
  }

  h1 {
    color: #fff;
    font-weight: 500;
    margin: 35px 0;
  }

  .block-box {
    background-color: #1B0C30;
    border-radius: 12px;
    padding: 10px;
    text-align: right;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .block-box > div {
    display: flex;
    gap: 30px;
    max-width: 180px;
  }

  .block-box h6 {
    font-size: 24px;
    font-weight: 500;
    margin-top: 30px;
  }

  .block-box h3 {
    font-size: 50px;
    font-weight: 500;
    margin: 30px 0;
    text-align: center;
  }

  .text-center {
    text-align: center;
    align-items: center;
  }

</style>

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
              <h1 class="m-0">Overview</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-tv"></i> Home</a></li>
                <li class="breadcrumb-item active"><i class="fa-solid fa-gauge"></i> Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-6 col-12 mb-4">
              <!-- small box -->
              <div class="block-box">
                <span>Sep 2 2023</span>
                <h3>
                  <svg width="25" height="30" viewBox="0 0 25 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5992 17.25H6.22503C5.97222 17.25 5.82403 16.9085 5.96903 16.66L13.8063 3.22462C13.9815 2.92426 14.3748 3.07303 14.3748 3.43967V12.75H18.749C19.0018 12.75 19.15 13.0916 19.005 13.3401L11.1677 26.7755C10.9925 27.0758 10.5992 26.927 10.5992 26.5604V17.25Z" fill="#5DFABA" stroke="#5DFABA" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  3343 kWh
                </h3>

                <p>Total: <b>33345 kWh </b></p>
              </div>
            </div>
            <div class="col-lg-3 col-12 mb-4">
              <!-- small box -->
              <div class="block-box text-center">
                <span></span>
                <h3>3343 kWh</h3>

                <p>Energy Credits</p>
              </div>
            </div>
            <div class="col-lg-3 col-12 mb-4">
              <!-- small box -->
              <div class="block-box text-center">
                <div>
                  <h6>4343kWh</span>
                  <h6>€ 2</h3>
                </div>
                <p>Coin Energy</p>
                <button type="button" class="submit">Sell Coins</button>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <?php include("../common/footer.php"); ?>