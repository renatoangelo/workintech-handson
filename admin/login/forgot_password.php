<?php
session_start();
ob_start();
include_once '../include/connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../lib/vendor/autoload.php';
$mail = new PHPMailer(true);

include_once '../common/header.php';
?>
</head>
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

  .login-logo p {
    display: block;
    color: #fff !important;
    font-size: 20px;
    font-weight: 500;
    margin: 10px 0;
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
<body class="hold-transition login-page">
<div class="login-box">
        <div class="login-logo">
          <div class="mb-2">
            <img src="../dist/img/sun-credit.svg" />
          </div>
          <p>Forgot Password</p>
        </div>
  <!-- /.login-logo -->

<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['recovery'])) {
  //var_dump($dados);

  $query_user = "SELECT id, name, email FROM users WHERE email = :email LIMIT 1";
  $result_user = $conn->prepare($query_user);
  $result_user->bindParam(':email', $dados['email'], PDO::PARAM_STR);
  $result_user->execute();

  if(($result_user) AND ($result_user->rowCount() !=0)) {
    $row_user = $result_user->fetch(PDO::FETCH_ASSOC);
    $recovery_key = password_hash($row_user['id'], PASSWORD_DEFAULT);
    //$data_agora = date('Y-m-d H:i:s');
    //echo $data_agora;
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $data_agora = new DateTime('now', $timezone);
    $data_agora = $data_agora->format('Y-m-d H:i:s');
    
    $query_update_user = "UPDATE users 
                          SET remember_token =:recovery_password,
                          updated_at =:updated_at
                          WHERE id =:id
                          LIMIT 1";
    $result_update_user = $conn->prepare($query_update_user);
    $result_update_user->bindParam(':recovery_password', $recovery_key, PDO::PARAM_STR);
    $result_update_user->bindParam(':id', $row_user['id'], PDO::PARAM_INT);
    $result_update_user->bindParam(':updated_at', $data_agora, PDO::PARAM_STR);

    if ($result_update_user->execute()) {

      $link = "http://devinsider.com.br/suncredit/admin/login/update_password.php?key=$recovery_key";

      try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = EMAILHOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = EMAILUSER;
        $mail->Password   = EMAILPASS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = EMAILPORT;

        $mail->setFrom(EMAILUSER, EMAILNAME);
        $mail->addAddress($row_user['email'], $row_user['name']);

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Password Recovey SunCredit';
        $mail->Body    = 'Dear User ' . $row_user['name'] . '.<br><Br>
        You request about a password change<br><br>
        To do this, click on the link below or copy and past in your browser: <br><Br><a href="' . $link . '">' . $link . '</a>';
        $mail->AltBody = 'access: ' . $link;

        $mail->send();

        $_SESSION['msg'] = "<p style='color: #32c330;text-align: center;font-weight: bold;'>Abra sua caixa de entrada com as instruções</p>";
        header("Location: index.php");

      }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
      

    } else {
      $msg_output = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>ERRO: Tente Novamente!</p>"; 
    }

    //*/


    
  } else {
    $msg_output = "<p style='color: #32c330;text-align: center;font-weight: bold;'>If your email be in our database, you will receive an email in your mailbox</p>";
  }

}

?>

  <div>
    <div>
      <?php
        if (isset($msg_output)) {
          echo $msg_output;
        }
      ?>
      <form action="" method="post"> 
      <?php 
      $email = "";
      if(isset($dados['email'])) { 
        $email = $dados['email'];
      }
      ?>
        <div class="fields mb-3">
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $email ?>" class="inputs" placeholder="e-mail">
        </div>
        <div class="row">
          <div class="col-12 mb-3">
            <button type="submit" class="submit" value="recovery" name="recovery">Request New Password</button>
          </div>
          <!-- /.col -->
          <div class="col-12 text-center">
              <label for="remember">
                Remember the password? <a href="../login/index.php">Do Sign In</a>
              </label>
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