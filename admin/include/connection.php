<?php
include_once '../admin/include/config.php';

$username = USERNAME;
$password = PASSWORD;
$host = HOST;
$dbname = DBNAME;
$port = PORT;


try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>