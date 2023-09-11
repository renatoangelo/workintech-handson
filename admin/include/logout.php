<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['name']);
$_SESSION['msg'] = "<p style='color: #32c330;text-align: center;font-weight: bold;'>Deslogado com Sucesso!</p>";
header("Location: ../login/index.php");