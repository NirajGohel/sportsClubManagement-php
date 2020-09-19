<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SCM | Administration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="registration.css">
  <style>
  .loginBox{
    margin:80 0 0 0;
    display:block;
  }
  </style>
</head>
<body>

<div class="container-fluid header text-center">
  Sports Club Management | Administration
</div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-6 loginBox">
      Login

      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="inputBox">
            <form action="admin_login_db.php" method="post">
              Username<br>
              <input type="text" name="name" autocomplete="off" required>

              Password<br>
              <input type="password" name="password" minlength="8" autocomplete="off" required>

              <input type="submit" value="Login" name="login">
            </form>
          </div>
        </div>
      </div>
      <!-- <a href="#" onclick="navigation(event)" id="regLink">Not a registered user? Register</a> -->

    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->

</body>
</html>

<?php
  if(isset($_GET['db_auth']) && $_GET['db_auth'] == 1){
    $message = "Username does not exists";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  if(isset($_GET['db_auth']) && $_GET['db_auth'] == 2){
    $message = "Password is invalid";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
?>
