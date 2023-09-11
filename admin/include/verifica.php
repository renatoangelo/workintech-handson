<?php
if (isset($_SESSION['tenta']) AND $_SESSION['tenta'] >= 3){
  $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Para acessar o sistema você precisa estar acertar a SENHA!</p>";
}
if (!isset($_SESSION['id']) AND (!isset($_SESSION['name']))) {
    $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Para acessar o sistema você precisa estar Logado!</p>";
    header("Location: ../login/index.php");
}
?>