<?php
include_once '../include/config.php';

$username = USERNAME;
$password = PASSWORD;
$host = HOST;
$dbname = DBNAME;
$port = PORT;


try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>