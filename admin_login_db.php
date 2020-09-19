<?php

  include "$_SERVER[DOCUMENT_ROOT]/SCM/config.php";

  if (isset($_POST['login'])) {
    $name = strtolower($_POST['name']);
    $password = $_POST['password'];

    try {
      $stmt = $pdo->prepare("select password,aid from admin where lower(name)=?");
      $stmt->execute([$name]);

      if ($stmt->rowCount() == 0) {
        header('location:admin_login.php?db_auth=1');
      }
      else{
        $row = $stmt->fetch();
        if($row['password'] == $password){
          session_start();
          $_SESSION['name'] = $_POST['name'];
          $_SESSION['id'] = $row['aid'];
          header('location:admin_home.php');
        }
        else {
          header('location:admin_login.php?db_auth=2');
        }
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

?>
