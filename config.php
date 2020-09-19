<?php
  $host = "localhost";
  $dbname = "db_scm";
  $username = "root";
  $password = "";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

?>
