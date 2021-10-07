<?php
$username = 'root';
$password = 'root';
try {
    $conn = new PDO('mysql:host=localhost;dbname=TestePHP', $username, $password);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }
  $conn = new PDO('mysql:host=localhost;dbname=TestePHP', $username, $password);
