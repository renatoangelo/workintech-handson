<?php
session_start();
ob_start();
include_once '../include/connection.php';
include_once '../common/header.php';
?>

<script>
  function confereSenha() {
    const senha = document.querySelector('input[name=senha_usuario]');
    const confirma = document.querySelector('input[name=senha_usuario2]');

    if (confirma.value === senha.value) { 
      confirma.setCustomValidity('');
    } else {
      confirma.setCustomValidity('As Senhas Não Conferem');
    }
  }
</script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../login/index.php"><b>Sun</b>Credit</a>
  </div>
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">UPDATE PASSWORD</p>

      <?php

      $key = filter_input(INPUT_GET, "key", FILTER_DEFAULT);
      if (!empty($key)) {
        //var_dump($key);

        $query_user = "SELECT id 
                      FROM users
                      WHERE remember_token = :recovery_password LIMIT 1";

        $result_user = $conn->prepare($query_user);
        $result_user->bindParam(':recovery_password', $key, PDO::PARAM_STR);
        $result_user->execute();

        if(($result_user) AND ($result_user->rowCount() !=0)) {
          $row_user = $result_user->fetch(PDO::FETCH_ASSOC);
          $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
          //var_dump($dados);

          if(!empty($dados['update_password'])) {
            $senha_usuario = password_hash($dados['senha_usuario'], PASSWORD_DEFAULT);
            $remember_token = 'NULL';

            $query_update_user = "UPDATE users 
                          SET password =:senha_usuario,
                          remember_token =:remember_token
                          WHERE id =:id
                          LIMIT 1";
            $result_update_user = $conn->prepare($query_update_user);
            $result_update_user->bindParam(':senha_usuario', $senha_usuario, PDO::PARAM_STR);
            $result_update_user->bindParam(':remember_token', $remember_token);
            $result_update_user->bindParam(':id', $row_user['id'], PDO::PARAM_INT);

            if ($result_update_user->execute()) {
              $_SESSION['msg'] = "<p style='color: #32c330;text-align: center;font-weight: bold;'>Senha Atualizada com Sucesso!</p>";
              header("Location: index.php");
        
            } else {
              echo "<p style='color: #ff0000;text-align: center;font-weight: bold;'>ERRO: Tente Novamente!</p>"; 
            }

          }

        } else {
          $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Link Invalido!!!<br>Solicite nova atualização de Senha...</p>";
          header("Location: forgot_password.php");
        }
      } else {
        $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Link Invalido!!!<br>Solicite nova atualização de Senha...</p>";
          header("Location: forgot_password.php");
      }
      

      ?>

    <form action="" method="post">
        <div class="input-group mb-3">
          <input type="password" name="senha_usuario" class="form-control" placeholder="Digite uma nova Senha" required onchange="confereSenha();">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="senha_usuario2" class="form-control" placeholder="Confirme a nova Senha" required onchange="confereSenha();">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">
            <button type="submit" name="update_password" value="update_pass" class="btn btn-primary btn-block">Atualizar sua Senha!</button>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <div class="icheck-primary">
              <label for="remember">
                Lembrou a Senha? <a href="../login/index.php">Faça seu Login</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php
include("../common/header.php");
?>