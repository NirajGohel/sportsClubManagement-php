<?php
  session_start();
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sports Club Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="index.css">
</head>

<body>
<div class="container-fluid header text-center">
  Sports Club Management<br>
  Welcome <?php echo $_SESSION['name']; ?>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <a href="admin_event.html">
      <div class="card">
        <img src="res/events.jpg">
        <div class="card-title text-center">Events</div>
      </div>
      </a>
    </div>

    <div class="col-lg-6">
      <a href="">
      <div class="card">
        <img src="res/ground.jpg" style="height:312;">
        <div class="card-title text-center">Ground Booking</div>
      </div>
      </a>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->

</body>
</html>
