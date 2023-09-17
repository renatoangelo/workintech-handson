<?php
session_start();
ob_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../include/default.php");

include_once '../include/connection.php';
include_once '../common/header.php';
?>
<style>
 .login-page {
    background-color: #0E031E !important;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  label {
    font-size: 16px;
    color: #fff;
    font-weight: 500 !important;
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

  .login-logo {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .login-logo > div {
    background-color: #1B0C30 !important;
    width: 120px;
    padding: 20px;
    border-radius: 10px;
  }

  .login-logo img {
    width: 100%;
    object-fit: contain;
  }

  .login-logo a {
    display: block;
    color: #fff !important;
    font-size: 20px;
    font-weight: 500;
    margin: 10px 0;
  }

  .login-logo p {
    font-size: 16px;
    color: #959595;
    font-weight: 500;
  }

  .forgot-password {
    color: #fff;
    display: block;
    text-align: right;
    font-size: 16px;
    margin: 10px 0 32px;
  }

  .forgot-password:hover {
    color: #fff;
    text-decoration: underline;
  }
</style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->

    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['sendlogin'])) {
      //var_dump($dados);

      $query_user = "SELECT id, name, email, password, permission FROM users WHERE email = :email LIMIT 1";
      $result_user = $conn->prepare($query_user);
      $result_user->bindParam(':email', $dados['email'], PDO::PARAM_STR);
      $result_user->execute();

      if (($result_user) and ($result_user->rowCount() != 0)) {
        $row_user = $result_user->fetch(PDO::FETCH_ASSOC);
        //var_dump($row_user);

        if (password_verify($dados['password'], $row_user['password'])) {
          $_SESSION['id'] = $row_user['id'];
          $_SESSION['name'] = $row_user['name'];
          $_SESSION['tenta'] = 0;
          header("Location: ../dashboard/index.php");
        } else {
          $_SESSION['tenta'] = $_SESSION['tenta'] + 1;
          $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Incorrect Email or Password</p>";
          if ($_SESSION['tenta'] >= 3) {
            // echo "<script>window.alert('vc ultrapassou as tentativas permitidas');</script>";
            $_SESSION['tenta'] = 0;
            header("Location: ../dashboard/index.php");
          }
        }
      } else {
        $_SESSION['tenta'] = $_SESSION['tenta'] + 1;
        $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Incorrent Email or Password</p>";
        if ($_SESSION['tenta'] >= 3) {
          // echo "<script>window.alert('vc ultrapassou as tentativas permitidas');</script>";
          $_SESSION['tenta'] = 0;
          header("Location: ../dashboard/index.php");
        }
      }
    }

    ?>


    <div>
      <div>
        <div class="login-logo">
          <div>
            <img src="../dist/img/sun-credit.svg" />
          </div>
          <a href="../login/">Welcome</a>
          <p>Enter your account here</p>
        </div>

        <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
        <form action="" method="post">
          <div class="fields mb-4">
            <label>Email</label>
            <input type="email" name="email" class="inputs" placeholder="Email" value="<?php if (isset($dados['email'])) {
                                                                                          echo $dados['email'];
                                                                                        } ?>">
          </div>
          <div class="fields mb-3">
          <label>Password</label>
            <input type="password" name="password" class="inputs" placeholder="Password" value="<?php if (isset($dados['password'])) {
                                                                                                  echo $dados['password'];
                                                                                                } ?>">
                                                                                                            <a class="forgot-password" href="forgot_password.php">Forgot password?</a>
          </div>
            <!-- /.col -->
            <button type="submit" name="sendlogin" value="access" class="submit">Sign In</button>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <script lang="js">

  </script>

  <?php
  include("../common/header.php");
  ?>