  <?php

  include "$_SERVER[DOCUMENT_ROOT]/SCM/config.php";

  if (isset($_POST['submit'])) {
    $name = strtolower($_POST['uname']);
    $email = $_POST['email'];
    $gender =  $_POST['gender'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);


    if ($password != $repassword) {
      header('location:registration.php?db_auth=1');
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      header('location:registration.php?db_auth=2');
    }
    else {
      try {
        $stmt = $pdo->prepare("insert into user(name,email,gender,password) values(?,?,?,?)");
        $stmt->execute([$name,$email,$gender,$password]);
        // echo "Inserted";
        header('location:index.php');
      } catch (PDOException $e) {
        echo $e->getMessage();
        if ($e->getCode() == 23000) {
          header('location:registration.php?db_auth=3');
        }
      }
    }
  }

  if (isset($_POST['login'])) {
    $name = strtolower($_POST['name']);
    $password = md5($_POST['password']);

    try {
      $stmt = $pdo->prepare("select password,uid from user where lower(name)=?");
      $stmt->execute([$name]);

      if ($stmt->rowCount() == 0) {
        header('location:registration.php?db_auth=4');
      }
      else{
        $row = $stmt->fetch();
        if($row['password'] == $password){
          session_start();
          $_SESSION['name'] = $_POST['name'];
          $_SESSION['id'] = $row['uid'];
          header('location:index.php');
        }
        else {
          header('location:registration.php?db_auth=5');
        }
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

 ?>
